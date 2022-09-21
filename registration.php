<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</head>

<body>

    <div class="col-md-3"></div>
    <div class="col-md-6 well">
        <h3 class="text-primary">PHP - PDO Login and Registration</h3>
        <hr style="border-top:1px dotted #ccc;" />
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <form action="register_query.php" method="POST">
                <h4 class="text-success">Register here...</h4>
                <hr style="border-top:1px groovy #000;">
                <div class="form-group">
                    <label>Firstname</label>
                    <input type="text" class="form-control" name="firstname" />
                </div>
                <div class="form-group">
                    <label>Lastname</label>
                    <input type="text" class="form-control" name="lastname" />
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="username" />
                </div>
                <div class="form-group">
                    <label>Mobile No</label>
                    <input type="text" class="form-control" name="username" />
                </div>
                <select name="day">
			<option value="01">01</option>
			<option value="02">02</option>
			<option value="03">03</option>
			<option value="04">04</option>
			<option value="05">05</option>
			<option value="06">06</option>
			<option value="07">07</option>
			<option value="08">08</option>
			<option value="09">09</option>
			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
			<option value="13">13</option>
			<option value="14">14</option>
			<option value="15">15</option>
			<option value="16">16</option>
			<option value="17">17</option>
			<option value="18">18</option>
			<option value="19">19</option>
			<option value="20">20</option>
			<option value="21">21</option>
			<option value="22">22</option>
			<option value="23">23</option>
			<option value="24">24</option>
			<option value="25">25</option>
			<option value="26">26</option>
			<option value="27">27</option>
			<option value="28">28</option>
			<option value="29">29</option>
			<option value="30">30</option>
			<option value="31">31</option>
		</select>
		<select name="month">
			<option value="01">January</option>
			<option value="02">February</option>
			<option value="03">March</option>
			<option value="04">April</option>
			<option value="05">May</option>
			<option value="06">June</option>
			<option value="07">July</option>
			<option value="08">August</option>
			<option value="09">September</option>
			<option value="10">October</option>
			<option value="11">November</option>
			<option value="12">December</option>
		</select>
		<select name="year">
			 <option value="2020">2020</option>
			 <option value="2019">2019</option>
			 <option value="2018">2018</option>
			 <option value="2017">2017</option>
			 <option value="2016">2016</option>
			 <option value="2015">2015</option>
			 <option value="2014">2014</option>
			 <option value="2013">2013</option>
			 <option value="2012">2012</option>
			 <option value="2011">2011</option>
			 <option value="2010">2010</option>
			 <option value="2009">2009</option>
			 <option value="2008">2008</option>
			 <option value="2007">2007</option>
			 <option value="2006">2006</option>
			 <option value="2005">2005</option>
			 <option value="2004">2004</option>
			 <option value="2003">2003</option>
			 <option value="2002">2002</option>
			 <option value="2001">2001</option>
			 <option value="2000">2000</option>
			 <option value="1999">1999</option>
			 <option value="1998">1998</option>
			 <option value="1997">1997</option>
			 <option value="1996">1996</option>
			 <option value="1995">1995</option>
			 <option value="1994">1994</option>
			 <option value="1993">1993</option>
			 <option value="1992">1992</option>
			 <option value="1991">1991</option>
			 <option value="1990">1990</option>
			 <option value="1989">1989</option>
			 <option value="1988">1988</option>
			 <option value="1987">1987</option>
			 <option value="1986">1986</option>
			 <option value="1985">1985</option>
			 <option value="1984">1984</option>
			 <option value="1983">1983</option>
			 <option value="1982">1982</option>
			 <option value="1981">1981</option>
			 <option value="1980">1980</option>
			 <option value="1979">1979</option>
			 <option value="1978">1978</option>
			 <option value="1977">1977</option>
			 <option value="1976">1976</option>
			 <option value="1975">1975</option>
			 <option value="1974">1974</option>
			 <option value="1973">1973</option>
			 <option value="1972">1972</option>
			 <option value="1971">1971</option>
			 <option value="1970">1970</option>
			 <option value="1969">1969</option>
			 <option value="1968">1968</option>
			 <option value="1967">1967</option>
			 <option value="1966">1966</option>
			 <option value="1965">1965</option>
			 <option value="1964">1964</option>
			 <option value="1963">1963</option>
			 <option value="1962">1962</option>
			 <option value="1961">1961</option>
			 <option value="1960">1960</option>
			 <option value="1959">1959</option>
			 <option value="1958">1958</option>
			 <option value="1957">1957</option>
			 <option value="1956">1956</option>
			 <option value="1955">1955</option>
			 <option value="1954">1954</option>
			 <option value="1953">1953</option>
			 <option value="1952">1952</option>
			 <option value="1951">1951</option>
			 <option value="1950">1950</option>
			 <option value="1949">1949</option>
			 <option value="1948">1948</option>
			 <option value="1947">1947</option>
			 <option value="1946">1946</option>
			 <option value="1945">1945</option>
			 <option value="1944">1944</option>
			 <option value="1943">1943</option>
			 <option value="1942">1942</option>
			 <option value="1941">1941</option>
			 <option value="1940">1940</option>
			 <option value="1939">1939</option>
			 <option value="1938">1938</option>
			 <option value="1937">1937</option>
			 <option value="1936">1936</option>
			 <option value="1935">1935</option>
			 <option value="1934">1934</option>
			 <option value="1933">1933</option>
			 <option value="1932">1932</option>
			 <option value="1931">1931</option>
			 <option value="1930">1930</option>
		</select>
                
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" />
                </div>
                <select name='gender'>
                    <option value=''>Select Gender</option>
                    <option value='Male'>Male</option>
                    <option value='Female'>Female</option>
                </select>
                <br />
                <div class="form-group">
                    <button class="btn btn-primary form-control" name="register">Register</button>
                </div>
                <a href="index.php">Login</a>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>