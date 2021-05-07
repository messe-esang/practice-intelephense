<?php
// TODO : html/post/list.html 에 있는 화면을 가지고 view를 완성시키기 (foreach, 변수 입력 자동완성 사용)
use MesseEsang\Practice\Domain\Post;

/**
 * post/list.php
 *
 * @var Post[] $posts
 */

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시글 목록</title>

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css' integrity='sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==' crossorigin='anonymous' />
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js' integrity='sha512-wV7Yj1alIZDqZFCUQJy85VN+qvEIly93fIQAN7iqDFCPEucLCeNFz4r35FCo9s6WrpdDQPi80xbljXB8Bjtvcg==' crossorigin='anonymous'></script>
</head>

<body>
    <?php var_dump($posts); ?>
    <table class="table">
        <caption>게시글 목록</caption>
        <thead>
            <tr>
                <th>번호</th>
                <th>제목</th>
                <th>내용</th>
            </tr>
        </thead>
        <tbody>
            <? foreach ($posts as $i => $post) { ?>
                <tr>
                    <th><?= $post->postId ?></th>
                    <td><?= $post->title ?> (<?= $post->getReplyCount() ?>)</td>
                    <td><?= $post->writeDate ?></td>
                </tr>
            <? } ?>
        </tbody>
    </table>
</body>

<script>
    $(function() {
        console.log(1234 + 125555);
    })
</script>

</html>
