



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
        <option value="berakit-data-pendidikan-dalam-kk">Desa Berakit</option>
        <option value="pengudang-data-pendidikan-dalam-kk">Desa Pengudang</option>
        <option value="sribintan-data-pendidikan-dalam-kk">Desa Sri Bintan</option>
        <option value="ekanganculai-data-pendidikan-dalam-kk">Desa Ekang Anculai</option>
        <option value="sebonglagoi-data-pendidikan-dalam-kk">Desa Sebong Lagoi</option>
        <option value="sebongpereh-data-pendidikan-dalam-kk">Desa Sebong Pereh</option>
    </select>
    <noscript>
<input type='submit'>
</noscript>
</form>
    </div>
  <br />
</div>
<!-- end -->