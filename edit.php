
<div id="main-content">
    <h2>Update Record</h2>
    <form class="post-form" action="savedata.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="cname" required/>
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="caddress" required/>
        </div>
        <div class="form-group">
            <label>Doctor</label>
            <select name="doctor" required>
                <option value="" selected disabled>Select Doctor</option>
                <option value ="Dr.Ram Baran">Dr.Ram Baran </option>
                <option value ="Dr.Hari Baran">Dr.Hari Baran </option>

            </select>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="cphone" required/>
        </div>
        <input class="submit" type="submit" value="Save"  />
    </form>
</div>
</div>
</body>
</html>
