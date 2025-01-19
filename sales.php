<?php
  $page_title = 'All sale';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
   page_require_level(3);
?>
<?php
$sales = find_all_sale();
?>
<?php include_once('layouts/header.php'); ?>
<div class="row">
  <div class="col-md-6">
    <?php echo display_msg($msg); ?>
  </div>
</div>
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading clearfix">
          <strong>
            <span class="glyphicon glyphicon-th"></span>
            <span>All Sales</span>
          </strong>
          <div class="pull-right">
            <a href="add_sale.php" class="btn btn-primary">Add sale</a>
          </div>
        </div>
        <div class="panel-body">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th class="" style="width: 50px;">#</th>
                <th> Product name </th>
                <th class="" style="width: 15%;"> Quantity</th>
                <th class="" style="width: 15%;"> Total </th>
                <th class="" style="width: 15%;"> Date </th>
                <th class="" style="width: 100px;"> Actions </th>
             </tr>
            </thead>
           <tbody>
             <?php foreach ($sales as $sale):?>
             <tr>
               <td class=""><?php echo count_id();?></td>
               <td><?php echo remove_junk($sale['name']); ?></td>
               <td class=""><?php echo (int)$sale['qty']; ?></td>
               <td class=""><?php echo remove_junk($sale['price']); ?></td>
               <td class=""><?php echo $sale['date']; ?></td>
               <td class="">
                  <div class="btn-group">
                     <a href="edit_sale.php?id=<?php echo (int)$sale['id'];?>" class="btn btn-warning btn-xs"  title="Edit" data-toggle="tooltip">
                       <span class="glyphicon glyphicon-edit"></span>
                     </a>
                     <a href="delete_sale.php?id=<?php echo (int)$sale['id'];?>" class="btn btn-danger btn-xs"  title="Delete" data-toggle="tooltip">
                       <span class="glyphicon glyphicon-trash"></span>
                     </a>
                  </div>
               </td>
             </tr>
             <?php endforeach;?>
           </tbody>
         </table>
        </div>
      </div>
    </div>
  </div>
<?php include_once('layouts/footer.php'); ?>
<style>
.table {
  width: 100%;
  max-width: 100%;
  margin-bottom: 20px;
  border-collapse: collapse;
}

.table th,
.table td {
  height:20px;
  padding: 8px;
  line-height: 1.42857143;
  vertical-align: top;
  border: 1px solid #ddd;
}

.table th {
  font-weight: bold;
  text-align: center;
}

.table-bordered th,
.table-bordered td {
  border: 1px solid #ddd;
}

.table-striped tbody tr:nth-of-type(odd) {
  background-color: #f9f9f9;
}

.table-bordered {
  border: 1px solid #ddd;
  border-collapse: separate;
}

.table-bordered th {
  border: 1px solid #ddd;
}

.table-bordered td {
  border: 1px solid #ddd;
}

.btn {
  display: inline-block;
  margin-bottom: 0;
  font-weight: 400;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  -ms-touch-action: manipulation;
  touch-action: manipulation;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  background-image: none;
  border: 1px solid transparent;
  padding: 6px 12px;
  font-size: 14px;
  line-height: 1.42857143;
  border-radius: 4px;
  -webkit-transition: all .25s;
  -o-transition: all .25s;
  transition: all .25s;
  color: #fff;
  background-color: #337ab7;
  border-color: #2e6da4;
}

.btn-xs {
  padding: 1px 5px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 3px;
}

.btn-warning {
  background-color: #f0ad4e;
  border-color: #eea236;
}

.btn-danger {
  background-color: #d9534f;
  border-color: #d43f3a;
}


    </style>