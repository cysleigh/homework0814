<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Lab 公告系統</title>
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	<script src="/scripts/jquery-1.9.1.min.js"></script>
	<script src="/scripts/jquery.mobile-1.3.2.min.js"></script>
	<link rel="stylesheet" href="/scripts/jquery.mobile-1.3.2.min.css" />
    <link rel="stylesheet" href="/styles.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="action-list"></div>
    <div data-role="page" data-add-back-btn="true" data-theme="c">
    <div data-role="header">
	<h1>公告系統資訊頁</h1>
    </div>
<h2>每日公告<a href="/news/create" class="btn btn-md btn-success pull-right"><span class="glyphicon glyphicon-plus"></span> 新增</a></h2>
<table class="table table-hover">
    <thead>
        <tr>
          <th>編號</th>
          <th>公告時間</th>
          <th>標題</th>
          <th>&nbsp;</th>
        </tr>
    </thead>
      
    @foreach ($newsList as $news)
    <thead>
         <tr>
              <th>{{$news ->newsID}}</th>
              <th>{{$news ->date}}</th>
              <th>{{$news ->title}}</th>
              <th>&nbsp;</th>
              <th>&nbsp;</th>
              <form method="post" action="/news/{{$news ->newsID}}"> 
                <th><a href="/news/{{$news ->newsID}}" class="btn btn-success" style="color:blue"><span class="glyphicon glyphicon-pencil"></span>詳細內容</a></th>
                <th><a href="/news/{{$news ->newsID}}/edit" class="btn btn-xs btn-info"><span class="glyphicon glyphicon-pencil"></span>修改</a></th> 
                @csrf
            </form>
        </tr>
    </thead>
    @endforeach
</table>
</div>
</div>
</body>
</html>