<?php

class Flasher {
	public static function setFlash($msg , $action , $type)
	{
		$_SESSION['flash'] = [
			'message' => $msg,
			'action' => $action,
			'type' => $type
		];
	}

	public static function flash()
	{
		if (isset($_SESSION['flash'])){
			echo "<script>Swal.fire({
							  position: 'top-end',
							  icon: '" . $_SESSION['flash']['type'] . "',
							  title: '" . $_SESSION['flash']['message'] . " " . $_SESSION['flash']['action'] . " !',
							  showConfirmButton: false,
							  timer: 2000
							});</script>";

			unset($_SESSION['flash']);
		}
	}
}