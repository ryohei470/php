<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Code Quiz</title>

    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/php03">
                Status Code Quiz
            </a>
        </div>

    </header>
    <main>
        <div class="quiz__content">

            <div class="question">
                <p class="question__text">
                    Q.以下の内容に当てはまるステータスコードを選んでください
                </p>

                <p class="question__text">

                </p>
            </div>
            <form class="quiz-form" action="result.php" method="post">
                <input type="hidden" name="answer_code" value="">
                <div class="quiz-form__group">
                    <label>
                        <input type="radio" name="answer" value="200">
                        200
                    </label>
                </div>
                <div class="quiz-form__group">
                    <label>
                        <input type="radio" name="answer" value="301">
                        301
                    </label>
                </div>
                <div class="quiz-form__group">
                    <label>
                        <input type="radio" name="answer" value="404">
                        404
                    </label>
                </div>
                <div class="quiz-form__group">
                    <label>
                        <input type="radio" name="answer" value="500">
                        500
                    </label>
                </div>
                <button class="quiz-form__button" type="submit">
                    　　　　　　　　　　　　回答
                </button>
            </form>
        </div>
    </main>
</body>

</html>