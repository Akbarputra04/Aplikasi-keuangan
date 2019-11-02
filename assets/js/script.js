$(function () {

	$('.ubah').on('click', function () {

		const id = $(this).data('id');

		$.ajax({

			url: 'http://localhost/aplikasi-keuangan/admin/getdata',
			method: 'post',
			data: {
				id: id
			},
			dataType: 'json',
			success: function (data) {

				data.forEach(data => {

					if (data.pemasukan != 0) {
						$('[name="id"]').val(data.id)
						$('.masuk').prop('checked', true)
						$('[name="kategori"]').val(data.id_kategori)
						$('[name="uang"]').val(data.pemasukan)
						$('[name="keterangan"]').val(data.keterangan)
					} else {
						$('.keluar').prop('checked', true)
						$('[name="kategori"]').val(data.id_kategori)
						$('[name="uang"]').val(data.pengeluaran)
						$('[name="keterangan"]').val(data.keterangan)
					}


				});

			}

		});

	});

	$('.hapus').on('click', function () {

		const id = $(this).data('id')

		$('.id').val(id)

	});

	$('.hapuskategori').on('click', function () {

		const id = $(this).data('id')

		$('.id').val(id)

	});

});
