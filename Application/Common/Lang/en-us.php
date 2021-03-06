<?php
return [
    //--------------------------------------------------------------------------
    // UI

    // Common
    'EXCLAMATION_MARK'          => '!',
    'COLON'                     => ':',
    'VERION'                    => 'Version',
    'NO_DATA_FOUND'             => 'No data found',
    'SERIAL_NO'                 => 'S/N',
    'ACTION'                    => 'Action',
    'CHANGE'                    => 'Change',
    'DELETE'                    => 'Delete',
    'CONFIRM_TITLE'             => 'Confirmation',
    'CONFIRM_TO_DELETE'         => 'Are you sure you wan to delete this {$model}?',
    'SUBMIT'                    => 'Submit',
    'SAVE'                      => 'Save',
    'CANCEL'                    => 'Cancel',
    'RECAPTCHA'                 => 'reCAPTCHA',
    'RECAPTCHA_INPUT'           => 'Type what you see',
    'SELECT_ONE'                => 'Select One',
    'MALE'                      => 'Male',
    'FEMALE'                    => 'Female',
    'YES'                       => 'Yes',
    'NO'                        => 'No',

    // Application
    'APPLICATION_NAME'          => 'ThinkPHP Blog',
    'APPLICATION_SHORT_DESC'    => 'ThinkPHP Development Demo Application',

    // Menu
    'MENU_POSTS'        => 'Posts',
    'MENU_ANGULARJS'    => 'AngularJS Demo',
    'MENU_PROFILE'      => 'User Profile',
    'SWITCH_LANGUAGE'   => 'Language',
    'CHINESE'           => 'Chinese',
    'ENGLISH'           => 'English',

    // Footer
    'FOOTER_MESSAGE'    => 'Welcome to {$appName}. Developed using <b>ThinkPHP</b> Version V{$thinkphpVersion}! Open <a href="https://github.com/blackpuppy/thinkblog">source code</a>. Any <a href="https://github.com/blackpuppy/thinkblog/issues/new">feedback or suggestions</a> are welcome!',

    // Home page
    'TECH_DESC'                 => 'Demonstrates the following techniques:',
    'REMOVE_ENTRY_IN_URL'       => 'Remove entry file {$entry_file} from URL',
    'DEV_USING_DOCKER'          => 'Dockerize local development environment',
    'CONFIG_IN_ENV'             => 'Externalize configuration in environment',
    'BASIC_CRUD'                => 'Basic CRUD',
    'BUILD_WITH_LARAVEL_MIX'    => 'Build frontend assets with Laravel Mix',
    'USER_AUTHENTICATION'       => 'User Authentication: whether the user is legal user of the system, including registration, login, logout and forget password, etc.',
    'FUNCTION_REGISTRATION'     => 'Registration',
    'FUNCTION_LOGIN'            => 'Log In',
    'FUNCTION_LOGOUT'           => 'Log Out',
    'FUNCTION_REMEMBER_ME'      => 'Remember Me',
    'FUNCTION_RECAPTCHA'        => 'ReCaptcha',
    'FUNCTION_FORGET_PASSWORD'  => 'Forget Password',
    'USER_AUTHORIZATION'        => 'User Authorization：whether the user has the permission to make an operation, for example, whether accessible to a page/function, whether can read/write/delete a piece of data, etc.',
    'MULTI_LANGUAGES'           => 'Internationalization/Localization (I18n/L10n)',
    'MODEL_ASSOCIATION'         => 'Model Assoication: Associations between models (one to one, one to many, belongs to, and many to many)',
    'RELATIONSHIP_USER_PROFILE' => 'User has one Profile, Profile belongs to User',
    'RELATIONSHIP_USER_POST'    => 'Author (User) has many Post, Post belongs to Author (User)',
    'RELATIONSHIP_USER_ROLE'    => 'User has many Role, Role has many User',
    'RELATIONSHIP_POST_TAG'     => 'Post has many Tag, Tag has many Post',
    'RELATIONSHIP_USER_COMMENT' => 'User has many Comment, Comment belongs to User',
    'RELATIONSHIP_POST_COMMENT' => 'Post has many Comment, Comment belongs to Post',
    'WEB_API'                   => 'Web API',
    'WEB_API_AUTHENTICATION'    => 'User Authentication: including registration, login and forget password, etc.',
    'WEB_API_AUTHORIZATION'     => 'User Authorization',
    'WEB_API_OTHERS'            => 'Other APIs',
    'ANGULARJS_1_CLIENT'        => 'AngularJS 1 Client',
    'ANGULARJS_1_CURD'          => 'CRUD',
    'ANGULARJS_1_PAGINATION'    => 'Pagination',
    'ANGULARJS_1_TRANSLATION'   => 'Translation',
    'ANGULARJS_1_AUTH'          => 'Authentication/Authorization',
    'USING_HTTPS'               => 'Using HTTPS',
    'UNIT_TESTING'              => 'Unit Testing',
    'MULTI_LANGUAGES_IN_DATA'   => 'Internationalization/Localization (I18n/L10n) in data',
    'SOURCE_DESC'               => 'You can access the <a href="https://github.com/blackpuppy/thinkblog">source code</a> of this demo.',
    'WELCOME_FEEDBACK'          => 'Any <a href="https://github.com/blackpuppy/thinkblog/issues/new">feedback or suggestions</a> are welcome!',

    // User
    'SIGN_UP'           => 'Sign Up',
    'SIGNUP'            => 'Sign Up',
    'LOGIN'             => 'Log In',
    'LOGOUT'            => 'Log Out',
    'USER_NAME'         => 'User Name',
    'PASSWORD'          => 'Password',
    'CONFIRM_PASSWORD'  => 'Confirm Password',
    'EMAIL'             => 'Email',
    'FULL_NAME'         => 'Full Name',
    'FIRST_NAME'        => 'First Name',
    'LAST_NAME'         => 'Last Name',
    'RECAPTCHA'         => 'reCAPTCHA',
    'REMEMBER_ME'       => 'Remember Me',
    'FORGET_PASSWORD'   => 'Forget Password',
    'RESET_PASSWORD'    => 'Reset Password',

    // Profile
    'VIEW_PROFILE'      => 'View Profile',
    'EDIT_PROFILE'      => 'Edit Profile',
    'PHONE'             => 'Phone',
    'ADDRESS'           => 'Address',
    'POSTAL_CODE'       => 'Postal Code',
    'GENDER'            => 'Gender',

    // Post
    'POST'                   => 'Post',
    'POST_LISTING'           => 'Posts',
    'FILTER_BY_AUTHOR'       => 'By Author',
    'ALL_POSTS'              => 'All Posts',
    'MY_POSTS'               => 'My Posts',
    'CREATE_POST'            => 'New Post',
    'VIEW_POST'              => 'View Post',
    'CHANGE_POST'            => 'Cange Post',
    'TITLE'                  => 'Title',
    'CONTENT'                => 'Content',
    'AUTHOR'                 => 'Author',
    'CONFIRM_TO_DELETE_POST' => 'Are you sure you wan to delete this post?',

    // Reset Password Email
    'RESET_DEAR_USER'       => 'Dear {$full_name},',
    'RESET_OPEN_DESC'       => 'You have requested to reset your password.  Please click the following link to reset your password.',
    'RESET_CLOSING_DESC'    => 'Note that the link will expire after 24 hours.',
    'RESET_THANKS'          => 'Thanks for using <a href="http://thinkblog.azurewebsites.net/">ThinkBlog</a>!',
    'RESET_TEAM'            => 'ThinkBlog Team',

    //--------------------------------------------------------------------------
    // Validation

    // Validation Rules
    // 'REQUIRED'                  => '{$field}必须填写！',

    // Validation - User Profile
    'FIRST_NAME_REQUIRED'       => 'First name is required!',
    'FIRST_NAME_LENGTH'         => 'First name must be 1-255 characters long!',
    'LAST_NAME_REQUIRED'        => 'Last name is required!',
    'LAST_NAME_LENGTH'          => 'Last name must be 0-255 characters long!',
    'ADDERSS_REQUIRED'          => 'Address is required!',
    'POSTAL_CODE_REQUIRED'      => 'Postal code is required!',
    'INVALID_POSTAL_CODE'       => 'Invalid postal code!',
    'INVALID_GENDER'            => 'Invalid gender!',

    // Validation - User
    'NAME_REQUIRED'             => 'User name is required!',
    'NAME_NOT_EXISTS'           => 'The user name does not exist.',
    'NAME_DUPLICATE'            => 'The user name is already used!  Please change the user name.',
    'PASSWORD_REQUIRED'         => 'Password is required!',
    'PASSWORD_LENGTH'           => 'Password must be 5-72 characters long!',
    'CONFIRM_PASSWORD_DISMATCH' => 'Confirm password does not match!',
    'EMAIL_INVALID'             => 'Invalid email!',
    'EMAIL_DUPLICATE'           => 'The email is already used!  Please change the email.',
    'EMAIL_REQUIRED'            => 'Email is required!',
    'EMAIL_NOT_EXISTS'          => 'The email does not exist.',

    // Validation - Post
    'TITLE_REQUIRED'            => 'Title is required!',
    'TITLE_TOO_LONG'            => 'Title cannot be longer than 255 characters!',
    'CONTENT_REQUIRED'          => 'Content is required!',
    'NOT_AUTHOR'                => 'You are not authorized to modify this post!',

    //--------------------------------------------------------------------------
    // Controller

    // User
    'SIGNUP_USER_SUCCESS'       => 'User saved successfully!',
    'SIGNUP_USER_FAILURE'       => 'User failed to save!',
    'LOGIN_USER_SUCCESS'        => 'User logged in successfully!',
    'LOGIN_USER_FAILURE'        => 'Incorrect user name or password!',
    'FORGET_PASSWORD_SUCCESS'   => 'Reset password request is submitted successfully! Please check the email sent to you, and reset password within 24 hours.',
    'FORGET_PASSWORD_FAILURE'   => 'Reset password request submission failed.  Please check your user name and email.',
    'RESET_TOKEN_INVALID'       => 'Reset Password token is invalid!',
    'RESET_PASSWORD_SUCCESS'    => 'Password is reset successfully!',
    'RESET_PASSWORD_FAILURE'    => 'Password reset failed.',
    'USER_NOT_FOUND'            => 'User not found!',
    'DELETE_USER_SUCCESS'       => 'User deleted successfully!',
    'DELETE_USER_FAILURE'       => 'User failed to delete!',

    // 个人资料
    'SAVE_PROFILE_SUCCESS'  => 'User profile saved successfully!',
    'SAVE_PROFILE_FAILURE'  => 'User profile failed to save!',

    // Post
    'SAVE_POST_SUCCESS'     => 'Post saved successfully!',
    'SAVE_POST_FAILURE'     => 'Post failed to save!',
    'POST_NOT_FOUND'        => 'Post not found!',
    'DELETE_POST_SUCCESS'   => 'Post deleted successfully!',
    'DELETE_POST_FAILURE'   => 'Post failed to delete!',

    //--------------------------------------------------------------------------
    // HTTP Codes

    'BAD_REQUEST'           => 'Bad Request!',          // 400
    'UNAUTHORIZED'          => 'Unauthorized!',         // 401
    'EXPIRED_TOKEN'         => 'Expired Token!',        // 401
    'METHOD_NOT_ALLOWED'    => 'Method Not Allowed!',   // 405
];
