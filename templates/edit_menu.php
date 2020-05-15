<div id='koop_edit_menu_dialog' title='Menu bearbeiten'  style='display: none;'>
	<div class='flex-wrapper'>
		<form action="edit_koop_page" method="post" >
			<input type="hidden" name="cid" value="<?= $cid ?>" >
			<input type="hidden" name="selected" value="<?= $selected ?>" >
			<input type="hidden" name="new_page" value="<?= $new_page ?>" >
			<table>
        	<tr><td>1. Link:</td><td><input type="text" name="kacheln[1][link]" value="<?= $kacheln[1]['link'] ?>" ></td>
        	    <td>1. Image:</td><td>
            	    <select id="k1_img" name="kacheln[1][img]" onchange="$('#k1_preview').attr('src',getImagesFolder()+$(this).val())">
            	      <? foreach ($kacheln_images as $kacheln_image) : ?>
                         <option value="<?= $kacheln_image ?>"><?= $kacheln_image ?></option>
                      <? endforeach ?>
                    </select>
               </td><!-- $('#k1_img_display').attr('src', $('#my_select_box').val()); -->
               <td>
               	<a href="#" class='koop-index-navigation sub_kacheln'><img id='k1_preview' src='<?=$ABSOLUTE_URI_STUDIP ?><?= $getPluginPath ?>/assets/images/<?= $kacheln[1]['img'] ?>'/></a>
               </td>
            </tr>

			<tr><td>2. Link:</td><td><input type="text" name="kacheln[2][link]" value="<?= $kacheln[2]['link'] ?>" ></td>
        	    <td>2. Image:</td>
        	    <td>
            	    <select id="k2_img" name="kacheln[2][img]" onchange="$('#k2_preview').attr('src',getImagesFolder()+$(this).val())">
            	      <? foreach ($kacheln_images as $kacheln_image) : ?>
                         <option value="<?= $kacheln_image ?>"><?= $kacheln_image ?></option>
                      <? endforeach ?>
                    </select>
               </td>
               <td>
               	<a href="#" class='koop-index-navigation sub_kacheln'><img id='k2_preview' src='<?=$ABSOLUTE_URI_STUDIP ?><?= $getPluginPath ?>/assets/images/<?= $kacheln[2]['img'] ?>'/></a>
               </td>
            </tr>
        	
        	<tr><td>3. Link:</td><td><input type="text" name="kacheln[3][link]" value="<?= $kacheln[3]['link'] ?>" ></td>
        	    <td>3. Image:</td>
        	    <td>
            	    <select id="k3_img" name="kacheln[3][img]" onchange="$('#k3_preview').attr('src',getImagesFolder()+$(this).val())">
            	      <? foreach ($kacheln_images as $kacheln_image) : ?>
                         <option value="<?= $kacheln_image ?>"><?= $kacheln_image ?></option>
                      <? endforeach ?>
                    </select>
               </td>
               <td>
               	<a href="#" class='koop-index-navigation sub_kacheln'><img id='k3_preview' src='<?=$ABSOLUTE_URI_STUDIP ?><?= $getPluginPath ?>/assets/images/<?= $kacheln[3]['img'] ?>'/></a>
               </td>
        	</tr>
        	
        	<tr><td>4. Link:</td><td><input type="text" name="kacheln[4][link]" value="<?= $kacheln[4]['link'] ?>" ></td>
        	    <td>4. Image:</td>
        	    <td>
            	    <select id="k4_img" name="kacheln[4][img]" onchange="$('#k4_preview').attr('src',getImagesFolder()+$(this).val())">
            	      <? foreach ($kacheln_images as $kacheln_image) : ?>
                         <option value="<?= $kacheln_image ?>"><?= $kacheln_image ?></option>
                      <? endforeach ?>
                    </select>
               </td>
               <td>
               	<a href="#" class='koop-index-navigation sub_kacheln'><img id='k4_preview' src='<?=$ABSOLUTE_URI_STUDIP ?><?= $getPluginPath ?>/assets/images/<?= $kacheln[4]['img'] ?>'/></a>
               </td>
        	</tr>
        	
        	<tr><td>5. Link:</td><td><input type="text" name="kacheln[5][link]" value="<?= $kacheln[5]['link'] ?>" ></td>
        	    <td>5. Image:</td>
        	    <td>
            	    <select id="k5_img" name="kacheln[5][img]" onchange="$('#k5_preview').attr('src',getImagesFolder()+$(this).val())">
            	      <? foreach ($kacheln_images as $kacheln_image) : ?>
                         <option value="<?= $kacheln_image ?>"><?= $kacheln_image ?></option>
                      <? endforeach ?>
                    </select>
               </td>
               <td>
               	<a href="#" class='koop-index-navigation sub_kacheln'><img id='k5_preview' src='<?=$ABSOLUTE_URI_STUDIP ?><?= $getPluginPath ?>/assets/images/<?= $kacheln[5]['img'] ?>'/></a>
               </td>
        	</tr>
        	
        	<tr><td>6. Link:</td><td><input type="text" name="kacheln[6][link]" value="<?= $kacheln[6]['link'] ?>" ></td>
        	    <td>6. Image:</td>
        	    <td>
            	    <select id="k6_img" name="kacheln[6][img]" onchange="$('#k6_preview').attr('src',getImagesFolder()+$(this).val())">
            	      <? foreach ($kacheln_images as $kacheln_image) : ?>
                         <option value="<?= $kacheln_image ?>"><?= $kacheln_image ?></option>
                      <? endforeach ?>
                    </select>
               </td>
               <td>
               	<a href="#" class='koop-index-navigation sub_kacheln'><img id='k6_preview' src='<?=$ABSOLUTE_URI_STUDIP ?><?= $getPluginPath ?>/assets/images/<?= $kacheln[6]['img'] ?>'/></a>
               </td>
        	</tr>
        	
        	<tr><td>7. Link:</td><td><input type="text" name="kacheln[7][link]" value="<?= $kacheln[7]['link'] ?>" ></td>
        	    <td>7. Image:</td>
        	    <td>
            	    <select id="k7_img" name="kacheln[7][img]" onchange="$('#k7_preview').attr('src',getImagesFolder()+$(this).val())">
            	      <? foreach ($kacheln_images as $kacheln_image) : ?>
                         <option value="<?= $kacheln_image ?>"><?= $kacheln_image ?></option>
                      <? endforeach ?>
                    </select>
               </td>
               <td>
               	<a href="#" class='koop-index-navigation sub_kacheln'><img id='k7_preview' src='<?=$ABSOLUTE_URI_STUDIP ?><?= $getPluginPath ?>/assets/images/<?= $kacheln[7]['img'] ?>'/></a>
               </td>
        	</tr>
        	
        	<tr><td>8. Link:</td><td><input type="text" name="kacheln[8][link]" value="<?= $kacheln[8]['link'] ?>" ></td>
        	    <td>8. Image:</td>
        	    <td>
            	    <select id="k8_img" name="kacheln[8][img]" onchange="$('#k8_preview').attr('src',getImagesFolder()+$(this).val())">
            	      <? foreach ($kacheln_images as $kacheln_image) : ?>
                         <option value="<?= $kacheln_image ?>"><?= $kacheln_image ?></option>
                      <? endforeach ?>
                    </select>
               </td>
               <td>
               	<a href="#" class='koop-index-navigation sub_kacheln'><img id='k8_preview' src='<?=$ABSOLUTE_URI_STUDIP ?><?= $getPluginPath ?>/assets/images/<?= $kacheln[8]['img'] ?>'/></a>
               </td>
        	</tr>
        	
        	<tr><td>9. Link:</td><td><input type="text" name="kacheln[9][link]" value="<?= $kacheln[9]['link'] ?>" ></td>    
        	    <td>9. Image:</td>
        	    <td>
            	    <select id="k9_img" name="kacheln[9][img]" onchange="$('#k9_preview').attr('src',getImagesFolder()+$(this).val())">
            	      <? foreach ($kacheln_images as $kacheln_image) : ?>
                         <option value="<?= $kacheln_image ?>"><?= $kacheln_image ?></option>
                      <? endforeach ?>
                    </select>
               </td>
               <td>
               	<a href="#" class='koop-index-navigation sub_kacheln'><img id='k9_preview' src='<?=$ABSOLUTE_URI_STUDIP ?><?= $getPluginPath ?>/assets/images/<?= $kacheln[9]['img'] ?>'/></a>
               </td>
        	</tr>
        	
        	</table>

    		<div class="alignleft margin10">
            	<button  >Speichern</button>
         </form>
            	<button  onclick="$( '#koop_edit_menu_dialog' ).dialog( 'close' );">Abbrechen</button>
        	</div>      

		
		   
	</div>
</div>
 
<script>

//by edit menu
function set_selected_images() {
	$('#k1_img option[value="<?= $kacheln[1]['img'] ?>"]').attr('selected','selected');
	$('#k2_img option[value="<?= $kacheln[2]['img'] ?>"]').attr('selected','selected');
	$('#k3_img option[value="<?= $kacheln[3]['img'] ?>"]').attr('selected','selected');
	$('#k4_img option[value="<?= $kacheln[4]['img'] ?>"]').attr('selected','selected');
	$('#k5_img option[value="<?= $kacheln[5]['img'] ?>"]').attr('selected','selected');
	$('#k6_img option[value="<?= $kacheln[6]['img'] ?>"]').attr('selected','selected');
	$('#k7_img option[value="<?= $kacheln[7]['img'] ?>"]').attr('selected','selected');
	$('#k8_img option[value="<?= $kacheln[8]['img'] ?>"]').attr('selected','selected');
	$('#k9_img option[value="<?= $kacheln[9]['img'] ?>"]').attr('selected','selected');
}
function getImagesFolder() {
	return '<?=$ABSOLUTE_URI_STUDIP ?><?= $getPluginPath ?>/assets/images/';
}
</script>