 <!-- start -->
 <script language="javascript" type="text/javascript">
function doReload(kecamatan){
	document.location = 'index.php?page=' + kecamatan;
	
	/* But if you want to submit the form just comment above line and uncomment following lines*/
	//document.frm1.action = 'samepage.php';
	//document.frm1.method = 'post';
	//document.frm1.submit();
}
</script>

 
<div class="section-wrapper">
  <h4 class="page-header"></h4>
    <div class="col-sm-12">
    <form name="frm1" id="frm1">
    <select name="kecamatan" class="form-control"  id="kecamatan" onChange="doReload(this.value);">
    <option value="" selected="selected">Pilih Kecamatan</option>
        <option value="gunungkijang-data-warga-negara">Kecamatan Gunung Kijang</option>
        <option value="lancangkuning-data-warga-negara">Kecamatan Bintan Utara</option>
        <option value="bintanbuyu-data-warga-negara">Kecamatan Teluk Bintan</option>
        <option value="batulepuk-data-warga-negara">Kecamatan Tambelan</option>
        <option value="berakit-data-warga-negara">Kecamatan Teluk Sebong</option>
        <option value="toapaya-data-warga-negara">Kecamatan Toapaya</option>
        <option value="mantangbaru-data-warga-negara">Kecamatan Mantang</option>
        <option value="kelong-data-warga-negara">Kecamatan Bintan Pesisir</option>
        <option value="kualasempang-data-warga-negara">Kecamatan Seri Kuala Lobam</option>
    </select>
    <noscript>
<input type='submit'>
</noscript>
</form>
  <br />
  </div>
</div>
<!-- end -->

<br>






         