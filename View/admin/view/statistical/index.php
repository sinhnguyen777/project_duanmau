
<form action="#" method="post">
    <div class="card mt-3">
        <div class="card-header">
            MANAGES ADMIN
        </div>
        <div class="card-body">
            <table class="table table-striped table">
                <thead>
                    <tr class="bg-dark text-light">
                        <th scope="col">Name</th>
                        <th scope="col">Number</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($statistical as $tk) {
                            
                            $name=$tk['name'];
                            $tongso=$tk['tongso'];
                            echo'
                            <tr>
                                <td>'.$name.'</td>
                                <td>'.$tongso.'</td>
                            </tr>
                            ';
                        }
                    ?>
                    <!-- <tr>
                        <td>Mark</td>
                        <td>Otto</td>
                    </tr>
                    <tr>
                        <td>Jacob</td>
                        <td>Thornton</td>
                    </tr> -->
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <a href="index.php?ctrl=statistical&action=chart" class="btn btn-primary">see chart</a>
        </div>
    </div>
</form>
<script src="../admin/View/jquery-3.5.1.min.js"></script>
