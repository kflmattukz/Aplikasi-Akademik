function delDataSiswa(id){
	Swal.fire({
		title: 'Apakah Anda Yakin?',
		text: "Data yang dihapus tidak bisa dikembalikan!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Hapus data Siswa!'
		}).then((result) => {
			if (result.value) {
				window.location.replace('http://localhost/cmsapp/public/Siswa/delete/' + id);
		}
	})
};