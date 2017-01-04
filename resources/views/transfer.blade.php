<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <form action="" method="post">
                <div class="row">
                    <div class="title">擔任課程</div>
                    <div class="col-md3">
                        日期<input type="text">
                        星期
                        <select name="weekday">
                            <option value="1">一</option>
                            <option value="2">二</option>
                            <option value="3">三</option>
                            <option value="4">四</option>
                            <option value="5">五</option>
                        </select>
                    </div>
                    <div class="col-md3">節次
                        <select name="period">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                        </select>
                    </div>
                    <div class="col-md3">
                        班級
                        <select name="class">
                            <option value="1">一甲</option>
                            <option value="2">一乙</option>
                            <option value="3">二甲</option>
                            <option value="4">二乙</option>
                            <option value="5">三甲</option>
                            <option value="6">三乙</option>
                            <option value="7">中四</option>
                            <option value="8">中五</option>
                            <option value="9">中六</option>
                        </select>
                    </div>
                    <div class="col-md3">科目<input type="text" name="subject"></div>
                </div>
                <hr>   
                <div class="row">
                    <div class="title">調課</div>
                    <div class="col-md3">
                        日期<input type="text">
                        星期
                        <select name="weekday">
                            <option value="1">一</option>
                            <option value="2">二</option>
                            <option value="3">三</option>
                            <option value="4">四</option>
                            <option value="5">五</option>
                        </select>
                    </div>
                    <div class="col-md3">節次
                        <select name="period">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                        </select>
                    </div>
                    <div class="col-md3">
                        班級
                        <select name="class">
                            <option value="1">一甲</option>
                            <option value="2">一乙</option>
                            <option value="3">二甲</option>
                            <option value="4">二乙</option>
                            <option value="5">三甲</option>
                            <option value="6">三乙</option>
                            <option value="7">中四</option>
                            <option value="8">中五</option>
                            <option value="9">中六</option>
                        </select>
                    </div>
                    <div class="col-md3">
                        科目<input type="text" name="subject">
                        調課人姓名<input type="text" name="name">
                    </div>
                </div>
                <div class="row">
                    {!! csrf_field() !!}
                    <input type="submit" name="submit">
                </div>
            </form>
        </div>
    </body>
</html>
