<?php
use Home\Model\ConfigListModel;
$genders = ConfigListModel::getConfigList(ConfigListModel::LIST_NAME_GENDER);
?>

<div class="container">
    <h1>{$Think.lang.EDIT_PROFILE}</h1>

    <if condition="!empty($validationError)">
    <div class="alert alert-danger">
        <ul>
            <li>{$validationError}</li>
        </ul>
    </div>
    </if>

    <form action="{:U('/profile/edit')}" method="post" class="form-horizontal">
        <input type="hidden" name="id" value="{$profile['id']}">
        <input type="hidden" name="user_id" value="{$profile['user_id']}">

        <div class="form-group">
            <label for="title" class="control-label col-sm-2">
                {$Think.lang.FULL_NAME}{$Think.lang.COLON}
            </label>
            <div class="col-md-6">
            <if condition="substr(LANG_SET, 0, 2) === 'zh'">
                <input type="text" name="last_name" placeholder="{$Think.lang.LAST_NAME}"
                    value="{$profile['last_name']}" autofocus="true">
                <input type="text" name="first_name" placeholder="{$Think.lang.FIRST_NAME}"
                    value="{$profile['first_name']}">
            <else />
                <input type="text" name="first_name" placeholder="{$Think.lang.FIRST_NAME}"
                    value="{$profile['first_name']}" autofocus="true">
                <input type="text" name="last_name" placeholder="{$Think.lang.LAST_NAME}"
                    value="{$profile['last_name']}">
            </if>
            </div>
        </div>

        <div class="form-group">
            <label for="address" class="control-label col-sm-2">
                {$Think.lang.ADDRESS}{$Think.lang.COLON}
            </label>
            <div class="col-md-8">
                <input type="text" id="address" name="address"
                    value="{:isset($profile['address']) ? $profile['address'] : ''}"
                    class="form-control">
            </div>
        </div>

        <div class="form-group">
            <label for="postal_code" class="control-label col-sm-2">
                {$Think.lang.POSTAL_CODE}{$Think.lang.COLON}
            </label>
            <div class="col-md-2">
                <input type="text" id="postal_code" name="postal_code"
                    value="{:isset($profile['postal_code']) ? $profile['postal_code'] : ''}"
                    class="form-control">
            </div>
        </div>

        <div class="form-group">
            <label for="gender_key" class="control-label col-sm-2">
                {$Think.lang.GENDER}{$Think.lang.COLON}
            </label>
            <div class="col-md-2">
                <select id="gender_key" name="gender_key" class="form-control">
                    <option value="" disabled>
                        -- {$Think.lang.SELECT_ONE} --
                    </option>
                    <volist name="genders" id="gender">
                    <option value="{:$gender['list_key']}" <if condition="$gender['list_key'] === $profile['gender_key']">selected="selected"</if>>
                        {:L(strtoupper($gender['list_value_desc']))}
                    </option>
                    </volist>
                </select>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" value="{$Think.lang.SAVE}" class="btn btn-success">
                <a href="{:U('/')}" class="btn btn-default">{$Think.lang.CANCEL}</a>
            </div>
        </div>
    </form>
</div>