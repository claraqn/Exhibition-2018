<?php

	$host = 'localhost';
  $user = 'root';
  $password = '123456';
  $dbName = 'myDB';

	//DB 연결
	$link = mysqli_connect($host, $user, $password, $dbName);

	// 연결 오류 발생 시 스크립트 종료
	if(mysqli_connect_errno()) {
		die('Connect Error: '.mysqli_connect_error());
	}

	//변수 선언
		$e1 = $_REQUEST['e1'];
		$e2 = $_REQUEST['e2'];
		$e3 = $_REQUEST['e3'];
		$e4 = $_REQUEST['e4'];

		$i1 = $_REQUEST['i1'];
		$i2 = $_REQUEST['i2'];
		$i3 = $_REQUEST['i3'];
		$i4 = $_REQUEST['i4'];

		$s1 = $_REQUEST['s1'];
		$s2 = $_REQUEST['s2'];
		$s3 = $_REQUEST['s3'];
		$s4 = $_REQUEST['s4'];

		$n1 = $_REQUEST['n1'];
		$n2 = $_REQUEST['n2'];
		$n3 = $_REQUEST['n3'];
		$n4 = $_REQUEST['n4'];

		$t1 = $_REQUEST['t1'];
		$t2 = $_REQUEST['t2'];
		$t3 = $_REQUEST['t3'];
		$t4 = $_REQUEST['t4'];

		$f1 = $_REQUEST['f1'];
		$f2 = $_REQUEST['f2'];
		$f3 = $_REQUEST['f3'];
		$f4 = $_REQUEST['f4'];

		$j1 = $_REQUEST['j1'];
		$j2 = $_REQUEST['j2'];
		$j3 = $_REQUEST['j3'];
		$j4 = $_REQUEST['j4'];

		$p1 = $_REQUEST['p1'];
		$p2 = $_REQUEST['p2'];
		$p3 = $_REQUEST['p3'];
		$p4 = $_REQUEST['p4'];

		$e = $e1+$e2+$e3+$e4;
		$i = $i1+$i2+$i3+$i4;
		$s = $s1+$s2+$s3+$s4;
		$n = $n1+$n2+$n3+$n4;
		$t = $t1+$t2+$t3+$t4;
		$f = $f1+$f2+$f3+$f4;
		$j = $j1+$j2+$j3+$j4;
		$p = $p1+$p2+$p3+$p4;

	// DB에 데이터 입력
		$query = "insert into e(e1, e2, e3, e4) values('$e1', '$e2', '$e3', '$e4')";
		$result = mysqli_query($link, $query);
		$query = "insert into i(i1, i2, i3, i4) values('$i1', '$i2', '$i3', '$i4')";
		$result = mysqli_query($link, $query);
		$query = "insert into s(s1, s2, s3, s4) values('$s1', '$s2', '$s3', '$s4')";
		$result = mysqli_query($link, $query);
		$query = "insert into n(n1, n2, n3, n4) values('$n1', '$n2', '$n3', '$n4')";
		$result = mysqli_query($link, $query);
		$query = "insert into t(t1, t2, t3, t4) values('$t1', '$t2', '$t3', '$t4')";
		$result = mysqli_query($link, $query);
		$query = "insert into f(f1, f2, f3, f4) values('$f1', '$f2', '$f3', '$f4')";
		$result = mysqli_query($link, $query);
		$query = "insert into j(j1, j2, j3, j4) values('$j1', '$j2', '$j3', '$j4')";
		$result = mysqli_query($link, $query);
		$query = "insert into p(p1, p2, p3, p4) values('$p1', '$p2', '$p3', '$p4')";
		$result = mysqli_query($link, $query);
		$query = "insert into r(e, i, s, n, t, f, j, p) values('$e', '$i', '$s', '$n', '$t', '$f', '$j', '$p')";
		$result = mysqli_query($link, $query);
		//mysqli_query($link, "set names utf8");

	// 접속 종료
	mysqli_close($link);

	// 페이지 이동 (javascript)
	echo("<script>location.href='/result_page.php';</script>");

?>