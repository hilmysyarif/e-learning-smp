$(document).ready(function(){
	$('#option-login').change(function(){
		c=$(this).val();
	    switch(c){
	    	case "siswa": 
	    		$("#label_masuk").text('Nomor Siswa');
	    		$("#id_masuk").attr('name','id_siswa'); 
	    		$("#id_masuk").attr('placeholder','NIS'); 
	    		break;
	    	case "guru": 
	    		$("#label_masuk").text('Nomor Guru');
	    		$("#id_masuk").attr('name','id_guru'); 
	    		$("#id_masuk").attr('placeholder','NIK');
				break
	    	case "wali": 
	    		$("#label_masuk").text('Nomor KTP');
	    		$("#id_masuk").attr('name','id_wali'); 
	    		$("#id_masuk").attr('placeholder','No KTP');
				break
	    	case "admin": 
	    		$("#label_masuk").text('Nomor ID');
	    		$("#id_masuk").attr('name','id_admin'); 
	    		$("#id_masuk").attr('placeholder','No ID');
				break
	    	default: 
	    		$("#label_masuk").text('Nomor Siswa');
	    		$("#id_masuk").attr('name','id_siswa'); 
	    		$("#id_masuk").attr('placeholder','Siswa');
	    }
	});
});