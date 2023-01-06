@extends('admin.layouts.main') @section('main')
<!-- end topbar -->
<!-- dashboard inner -->
<div class="midde_cont">
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-md-12">
                <div class="page_title">
                    <h2>Contact</h2>
                </div>
            </div>
        </div>
        <!-- row -->
        <table id="customers">
            <tr>
                <th>Emp.Id</th>
                <th>Name</th>
                <th>Designation</th>
                <th>Address</th>
                <th>Mobile No.</th>
            </tr>
            <tr>
                <td>0001</td>
                <td>Raj</td>
                <td>Php developer</td>
                <td>Noida Sector-37</td>
                <td>9721181225</td>
            </tr>
            <tr>
                <td>0002</td>
                <td>Rahul</td>
                <td>Java</td>
                <td>Noida Sector-44</td>
                <td>9721181475</td>
            </tr>
            <tr>
                <td>0003</td>
                <td>Sandeep</td>
                <td>.Net</td>
                <td>Noida Sector-52</td>
                <td>9721188925</td>
            </tr>
            <tr>
                <td>0004</td>
                <td>Rahul</td>
                <td>UI</td>
                <td>Noida Sector-62</td>
                <td>9721181365</td>
            </tr>
            <tr>
                <td>0005</td>
                <td>Sohan</td>
                <td>Java</td>
                <td>Noida Sector-06</td>
                <td>97211124895</td>
            </tr>
            <tr>
                <td>0006</td>
                <td>Manoj</td>
                <td>Html</td>
                <td>Noida Sector-18</td>
                <td>9721148925</td>
            </tr>
            <tr>
                <td>0007</td>
                <td>Deepak</td>
                <td>Java</td>
                <td>Noida Sector-62</td>
                <td>97211786325</td>
            </tr>
        </table>

        @endsection
    </div>
</div>
