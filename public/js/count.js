$(function () {
    //プロフィールを編集する際に自己紹介部分のデフォルト文字数を記載
    var defaltCount = $('.js-input-count').text().length
    $('.js-show-count').text(defaltCount);

    // プロフィールの自己紹介部分文字数のカウント
    $('.js-keyup-count').keyup(function () {
        var count = $(this).val().length;
        $('.js-show-count').text(count);
    })

})
