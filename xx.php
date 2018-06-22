<?PHP
header("Content-type: text/html; charset=utf-8"); 
$servername = "localhost";
$username = "root";
$password = "";
$dbname="ajax_jq";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
$i=1;
$sql = "SELECT * FROM think_t2";
mysqli_query($conn, 'set names utf8');
$result = $conn->query($sql);

$sql2 = "SELECT * FROM think_t3";
mysqli_query($conn, 'set names utf8');
$result2 = $conn->query($sql2);

echo'<div class="xx_items">
    <span class="glyphicon glyphicon-paste text-warning"></span> 好友动态
    <span class="pull-right glyphicon glyphicon-chevron-right"></span>
  </div>
  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="panel">
      <div class="panel-heading" role="tab" id="headingOne">
        <h4 class="panel-title">
          <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            掌盟好友
          </a>
        </h4>
      </div>
      <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
        <div class="panel-body">';
if ($result->num_rows > 0) {
    // 输出数据
	while($row = $result->fetch_assoc()) {
		echo'<div class="body-items">
			  <img src="img/tx.jpg" />
			  <p>
				'.$row['name'].' <span class="sexSpan">'.$row['age'].'</span><br/>
				<span class="glyphicon glyphicon-cd text-warning"></span> '.$row['idname'].' <span class="dqSpan">'.$row['dq'].'</span>
			  </p>
			  <p class="pull-right">
				<button>聊天</button><br/>
				<span class="glyphicon glyphicon-record"></span>游戏离线
			  </p>
			</div>';
	}
} else {
    echo "";
}
     echo'
        </div>
      </div>
    </div>
    <div class="panel" style="margin-top:1px !important;">
      <div class="panel-heading" role="tab" id="headingTwo">
        <h4 class="panel-title">
          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            游戏好友<span class="pull-right"><span class="glyphicon glyphicon-tasks"></span> 班德尔城</span>
          </a>
        </h4>
      </div>
      <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
        <div class="panel-body">';
if ($result2->num_rows > 0) {
    // 输出数据
	while($row2 = $result2->fetch_assoc()) {
		echo'<div class="body-items">
		       <p>'.$row2['title'].'</p>
			   <p class="pull-right">'.$row2['nons'].'/'.$row2['counts'].'</p>
			</div>';
	}
} else {
    echo "";
}
          
     echo'</div>
      </div>
    </div>
  </div>';
           
          
?>