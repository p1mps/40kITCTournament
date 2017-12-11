@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
               <table class="table">
                 <thead>
                   <tr>
                     <th scope="col">#</th>
                     <th scope="col">Name</th>
                     <th scope="col">Race</th>
                     <th scope="col">Points</th>
                   </tr>
                 </thead>
                 <tbody>

                   <tr>
                     <th scope="row">1</th>
                     <td>Andrea</td>
                     <td>Imperial guard</td>
                     <td>100</td>
                   </tr>
                   <tr>
                     <th scope="row">3</th>
                     <td>Riccardo</td>
                     <td>Chaos Daemons</td>
                     <td>95</td>
                   </tr>
                   <tr>
                     <th scope="row">2</th>
                     <td>Oliver</td>
                     <td>Chaos Black Legion</td>
                     <td>90</td>
                   </tr>
                 </tbody>
               </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
