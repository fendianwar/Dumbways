		$(document).on('click', '.delete-modal', function() {
			$('.did').val($(this).data('id'));
			$('.dname').html($(this).data('name'));
			$('#myModal').modal('show');
		});
		$(document).ready(function () {
			var table = $('#example').DataTable( {
				rowReorder: {
					selector: 'td:nth-child(2)'
				},
				responsive: true,
				"pagingType": "full_numbers",
				language: {
					oPaginate: {
						sNext: '<i class="fas fa-chevron-right"></i>',
						sPrevious: '<i class="fas fa-chevron-left"></i>',
						sFirst: '<i class="fas fa-angle-double-left"></i>',
						sLast: '<i class="fas fa-angle-double-right"></i>'
					}
				}  
			});
        	// set form search
        	var cari = document.getElementsByTagName("input");
        	cari[0].setAttribute('size','10');
        	// end

        	// set size pagination
        	$('.col-md-7').addClass('pagination-sm');
        	// end
        });


// javascript di add berita
$(document).on('click', '.deskripsi-modal', function() {
	$('.deskrip').html($(this).data('isi'));
});
			// fungsi untuk menampilkan gambar sebelum diupload di bagian tambah data
			function fileValidation(){
				var fileInput = document.getElementById('file');
				var filePath = fileInput.value;
				var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
				if(!allowedExtensions.exec(filePath)){
					Swal.fire("Error!","Gunakan Ekstensi .jpeg/.jpg/.png/.gif only.","Ekstensi Salah");
					fileInput.value = '';
					return false;
				}
				else
				{
		        	//Image preview
		        	if (fileInput.files && fileInput.files[0]) {
		        		var reader = new FileReader();
		        		reader.onload = function(e) {
		        			document.getElementById('imagePreview').innerHTML = '<a href="'+e.target.result+'" data-fancybox><img id="gambar" style="max-height: 147px;" src="'+e.target.result+'"/></a>';
		        		};
		        		reader.readAsDataURL(fileInput.files[0]);
		        	}
		        }
		    }
			// end fungsi gambar show di bagian tambah data