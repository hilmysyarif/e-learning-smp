$(document).ready(function(){
	$('#option-login').change(function(){
		c=$(this).val();
	    switch(c){
	    	case "siswa": 
	    		$("#label_masuk").text('Nomor Induk Siswa');
	    		$("#id_masuk").attr('name','id_siswa'); 
	    		$("#id_masuk").attr('placeholder','NIS'); 
	    		break;
	    	case "guru": 
	    		$("#label_masuk").text('Nomor Induk Karyawan');
	    		$("#id_masuk").attr('name','id_guru'); 
	    		$("#id_masuk").attr('placeholder','NIK');
				break
	    	case "wali": 
	    		$("#label_masuk").text('Nomor KTP');
	    		$("#id_masuk").attr('name','id_wali'); 
	    		$("#id_masuk").attr('placeholder','No KTP');
				break
	    	case "admin": 
	    		$("#label_masuk").text('Email');
	    		$("#id_masuk").attr('name','id_admin'); 
	    		$("#id_masuk").attr('placeholder','Email');
				break
	    	default: 
	    		$("#label_masuk").text('Nomor Siswa');
	    		$("#id_masuk").attr('name','id_siswa'); 
	    		$("#id_masuk").attr('placeholder','Siswa');
	    }
	});
});

// $(document).ready(function(){
// 	$('.nav-long ul').hover(function(){
// 		$('.nav-long a').attr('style', 'color:#fff');
// 		$('.nav-long a').attr('style', 'color:#ccc');
// 	});
// });