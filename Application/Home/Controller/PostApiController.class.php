<?php
namespace Home\Controller;

use Think\Controller\RestController;
use Think\Model;

/**
 * 文章API控制器。
 */
class PostApiController extends RestController
{
    // REST允许的请求类型列表
    protected $allowMethod = array('get', 'post', 'put', 'delete');

    // REST允许请求的资源类型列表
    protected $allowType = array('json');

    // 默认的资源类型
    protected $defaultType = 'json';

    /**
     * 文章列表。
     * @return void
     */
    public function index()
    {
        $msg = PHP_EOL . 'Home\Controller\PostApiController::index():';

        try {
            $filter = I('filter');
            $order = I('order');
            $page = I(C('VAR_PAGE'));
            $pageSize = I('pageSize');
            $parameters = compact('filter', 'order', 'page', 'pageSize');

            $msg .= // PHP_EOL . '  VAR_PAGE = ' . C('VAR_PAGE') .
                PHP_EOL . '  parameters = ' . print_r($parameters, true);

            $Post = D('Post');
            $posts = $Post->paginate($parameters);

            // $msg .= PHP_EOL . '  $posts = ' . print_r($posts, true);

            $this->response($posts, 'json');
        } catch (Exception $e) {
            $msg .= PHP_EOL . 'error: ' . $e->getMessage();
            throw $e;
        } finally {
            $msg .= PHP_EOL . str_repeat('-', 80);
            \Think\Log::write($msg, 'DEBUG');
        }
    }

    /**
     * 添加文章。
     * @return void
     */
    public function create()
    {
        if (!IS_POST) {
            $this->response(L('METHOD_NOT_ALLOWED'), 'json', 405);
            return;
        }

        $msg = PHP_EOL . 'Home\Controller\PostApiController::create():';

        try {
            $input = json_decode($GLOBALS['HTTP_RAW_POST_DATA'], true);

            $msg .= PHP_EOL . '  $input = ' . print_r($input, true);

            $Post = D('Post');
            $newPost = $Post->create($input);

            // 暂时
            $newPost['created_by'] = 9;
            $newPost['author_user_id'] = 9;
            $Post->created_by = 9;
            $Post->author_user_id = 9;

            $msg .= PHP_EOL . '  $newPost = ' . print_r($newPost, true);

            if (!$newPost) {
                $msg .= PHP_EOL . '  validation error: ' . $Post->getError();

                $this->response($Post->getError(), 'json', 400);
            } else {
                $result = $Post->add();

                $msg .= PHP_EOL . '  $result = ' . print_r($result, true);

                if ($result !== false) {
                    $data = $Post->find($result);
                    $meta = [
                        'message' => L('SAVE_POST_SUCCESS'),
                    ];

                    $msg .= PHP_EOL . '  $data = ' . print_r($data, true);
                    $msg .= PHP_EOL . '  $meta = ' . print_r($meta, true);
                    $msg .= PHP_EOL . str_repeat('-', 80);
                    \Think\Log::write($msg, 'DEBUG');

                    $this->response(compact('data', 'meta'), 'json', 201);
                } else {
                    $meta = [
                        'message' => L('SAVE_POST_FAILURE'),
                    ];

                    $msg .= PHP_EOL . '  $meta = ' . print_r($meta, true);
                    $msg .= PHP_EOL . str_repeat('-', 80);
                    \Think\Log::write($msg, 'DEBUG');

                    $this->response(compact('meta'), 'json', 500);
                }
            }
        } catch (Exception $e) {
            $msg .= PHP_EOL . '  error: ' . $e->getMessage();
            throw $e;
        } finally {
            $msg .= PHP_EOL . str_repeat('-', 80);
            \Think\Log::write($msg, 'DEBUG');
        }
    }
}
