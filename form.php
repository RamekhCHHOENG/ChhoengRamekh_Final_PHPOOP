
<form action="" method="POST">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="">First Number</label>
                        <input type="number" name="firstNumber" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Second Number</label>
                        <select name="operator" class="form-control">
                            <option value="none" required>None</option>
                            <option value="add">Add</option>
                            <option value="minus">Minus</option>
                            <option value="multiply">Multiply</option>
                            <option value="devide">Devide</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Select Operator</label>
                        <input type="number" name="secondNumber" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-success btn-sm">Calculate</button>
                    </div>
                    <div class="form-group">
                        <hp>The result is: <?php include "cal.php";?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</form>