const flashdata = $('.flash-data').data('flashdata');

if (flashdata) {
    Swal({

        title:'Data E-arsip',
        text:'Berhasil'+ flashdata,
        type:'success'
    });
    
}