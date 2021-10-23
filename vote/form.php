<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VOTE2021</title>
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/form.css">
</head>

<body>
    <header>
        <h1>VOTE</h1>
        <p>2021</p>
    </header>
    <section class="content">
        <h2>第49回衆議院議員選挙＜福岡2区＞</h2>
        <table class="table">
            <tbody>
                <tr>
                    <th>投票日</th>
                    <td>2021年10月31日</td>
                    <th>公示日</th>
                    <td>2021年10月19日</td>
                </tr>
            </tbody>
        </table>
        <form action="create.php" method="post" class="form">
            <fieldset>
                <legend>投票フォーム</legend>
                <div class="form_inner">
                    <div>
                        <p>① IDを入力してください</p>
                        <input type="text" name="ID">
                    </div>
                    <div>
                        <p>② 投票する候補者名をお選びください</p>
                        <label class="check_lb">
                            <input type="checkbox" name="Name" value="いなとみ 修二"> いなとみ 修二
                        </label>
                        <label class="check_lb">
                            <input type="checkbox" name="Name" value="おにき 誠"> おにき 誠
                        </label>
                        <label class="check_lb">
                            <input type="checkbox" name="Name" value="しんかい たかし"> しんかい たかし
                        </label>
                    </div>
                </div>
                <div>
                    <a href="read.php"><button class="done_btn">投票完了</button></a>
                </div>
            </fieldset>
        </form>
    </section>
</body>

</html>