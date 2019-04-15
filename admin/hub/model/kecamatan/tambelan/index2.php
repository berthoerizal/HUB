<!-- start -->
<script language="javascript" type="text/javascript">
function doReload(catid){
	document.location = 'index.php?page=' + catid;
	
	/* But if you want to submit the form just comment above line and uncomment following lines*/
	//document.frm1.action = 'samepage.php';
	//document.frm1.method = 'post';
	//document.frm1.submit();
}
</script>
<div class="section-wrapper">
  <h4 class="page-header"></h4>
  <div class="row">
    <div class="col-sm-3">
    <form name="frm1" id="frm1">
    <select name="catid" class="form-control"  id="catid" onChange="doReload(this.value);">
        <option value="" selected="selected">Pilih Desa</option>
        <option value="batulepuk-wilayah-administratif">Desa Batu Lepuk</option>
        <option value="kampunghilir-wilayah-administratif">Desa Kampung Hilir</option>
        <option value="kampungmelayu-wilayah-administratif">Desa Kampung Melayu</option>
        <option value="kukup-wilayah-administratif">Desa Kukup</option>
        <option value="pulaumentebung-wilayah-administratif">Desa Pulau Mentebung</option>
        <option value="pulaupinang-wilayah-administratif">Desa Pulau Pinang</option>
        <option value="pengikik-wilayah-administratif">Desa Pengikik</option>
    </select>
    <noscript>
<input type='submit'>
</noscript>
</form>
    </div>
  <br />
</div>
<!-- end -->