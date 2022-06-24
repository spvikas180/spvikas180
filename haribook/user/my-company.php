<?php
$userId = $_SESSION['userId'];
$business_data = dbAction("listing", $operation = 4, $form_data = "", "userId = $userId order by date desc");
?>
<h3>My Company</h3>
<hr>
<?php
if ($business_data->num_rows > 0) {
    ?>
    <table class="table table-responsive">
        <thead>
            <tr>
                <th>Company</th>
                <th>Website</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($business_data as $row_business_data) {
                ?>
                <tr>
                    <td><?php echo $row_business_data['companyName']; ?></td>
                    <td><?php echo $row_business_data['website']; ?></td>
                    <td><?php echo date('M j Y', strtotime($row_business_data['date'])); ?></td>
                    <td>
                        <a href="index?page=edit-company&id=<?php echo $row_business_data['listId']; ?>" style="padding-right: 20px">Add More Details</a>
                        <a href="index?page=edit-company&id=<?php echo $row_business_data['listId']; ?>" class="i-action"><i class="fa fa-pencil-square-o i-blue" aria-hidden="true"></i></a>
                        <a href="<?php echo BASE_URL . 'phone-number/' . $row_business_data['website']; ?>" class="i-action"><i class="fa fa-eye" aria-hidden="true"></i></a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
    <?php
} else {
    echo 'Not Found';
}
?>
                   