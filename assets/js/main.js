$(function () {
	var navbar = $('#navbar');

	$(window).scroll(function () {
		if ($(window).scrollTop() <= 20) {
			navbar.removeClass('navbar-scroll');
		} else {
			navbar.addClass('navbar-scroll');
		}
	});
	$('.counter').counterUp({
		delay: 10,
		time: 1000
	});
});



// ---------------------------------------------------------------

//Admin
window.setTimeout(function () {
	$("#pesan-gagal").fadeTo(250, 0).slideUp(250, function () {
		$(this).remove();
		$("#pesan-gagal").attr('hidden');
	});
}, 2000);

window.setTimeout(function () {
	$("#pesan-sukses").fadeTo(250, 0).slideUp(250, function () {
		$(this).remove();
		$("#pesan-sukses").attr('hidden');
	});
}, 2000);

$('#mapel').on('change', function () {
	$('#form-mapel-2').removeAttr('hidden');
});

function hapusGuru(id, url) {
	$('#modalDelete').modal('show');
	$('#modalDelete .modal-footer #id').val(id);
	$('#modalDelete .modal-footer #url').attr('action', url);
}

function hapusUser(id, url) {
	$('#modalDelete').modal('show');
	$('#modalDelete .modal-footer #id').val(id);
	$('#modalDelete .modal-footer #url').attr('action', url);
}

function hapusAkademik(id, url) {
	$('#modalDelete').modal('show');
	$('#modalDelete .modal-footer #id').val(id);
	$('#modalDelete .modal-footer #url').attr('action', url);
}

$('.custom-file input').change(function (e) {
	$(this).next('.custom-file-label').html(e.target.files[0].name);
});

$(function () {
	$('.ubahAkademik').on('click', function () {
		const id = $(this).data('id');
		const url = $(this).data('url');

		$.ajax({
			url: url,
			data: {
				id: id
			},
			dataType: 'json',
			method: 'post',
			success: function (data) {
				$('#ubahAkademik #id').val(data.id);
				$('#ubahAkademik #kegiatan').val(data.kegiatan);
				$('#ubahAkademik #tanggal1').val(data.tanggal1);
				$('#ubahAkademik #tanggal2').val(data.tanggal2);
			}
		});
	});
});
