<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>公告詳細內容</title>
<meta name="viewport" content="width=device-width,initial-scale=1" />
<script src="/scripts/jquery-1.9.1.min.js"></script>
<script src="/scripts/jquery.mobile-1.3.2.min.js"></script>
<link rel="stylesheet" href="/scripts/jquery.mobile-1.3.2.min.css" />
<link rel="stylesheet" href="/styles.css" />
</head>
<body>
        <div class="action-list"></div>
        <div data-role="page" data-add-back-btn="true" data-theme="c">
            <div data-role="header">
                <h1>公告詳細內容</h1>
            </div>
        <table class="table table-hover">
                <thead>
                    <tr>
                        <th>編號:{{$newsList ->newsID}}</th>
                     </tr>
                    <tr>
                        <th>公告時間:  {{$newsList ->date}}</th>
                     </tr>
                    <tr>
                        <th>標題:  {{$newsList ->title}}</th>
                     </tr>
                     <tr>
                            <th>內容:<br>{{$newsList ->content}}</th>
                        </tr>
                </thead>
            </table>
        </div>
</body>
</html>