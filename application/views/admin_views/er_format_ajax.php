<?php 
  $i = 0;
  foreach ($category as $cat) {
  $i++;
?>
  <tr>
    <td width="2%"><?php echo $i; ?>.</td>
    <td width="75%"><?php echo $cat['name']; ?></td>
    <td width="10%">
      <td width="10%"><button class="btn ml-3 news-button news-button-l" type="button" onclick="ajax(<?php echo $cat['id'] ?>)">Удалить</button></td>
    </td>
    <td width="10%">
      <a href="<?php echo base_url('pages/edit_record/'.$cat['id']); ?>"><button class="btn ml-3 news-button news-button-r" type="button">Изменить</button></a>
    </td>
  </tr>
<?php 
  }
?>