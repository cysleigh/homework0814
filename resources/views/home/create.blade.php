<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Lab</title>
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
            <h1>管理員新增公告頁面</h1>
        </div>
        <div data-role="content">
                <form method="post" action="/news" class="form-horizontal" data-ajax=false>
                    @csrf

                <input type="hidden" name="newsID" value="3">
                <div data-role="fieldcontain">
                    <label for="title">標題:</label>
                    <input type="text" id="title" name="title"/>
                </div>
                <div data-role="fieldcontain">
                    <label for="content">內容:</label>
                    <input type="text" id="content" name="content"/>
                </div>
                <div data-role="fieldcontain">
                        <label for="date">時間:</label>
                        <input type="text" id="date" name="date"/>
                </div>
  
                <div class="ui-grid-a">
                    <div class="ui-block-a">
                        <input type="submit" name="btnOKCancel" value="OK" /></div>
                    <div class="ui-block-b">
                        <input type="submit" name="btnOKCancel" value="Cancel" /></div>
                </div>

            </form>
        </div>
    </div>
</body>
</html>