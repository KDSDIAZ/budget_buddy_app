@php
    if (empty($_POST["due_date"])){
            $date_err =  "Date is Required";
        }else{
            $dataDate = explode("-", $due_date);
            if($due_date > date("Y-m-d")){
                $date_err = "Invalid Date";
            }
@endphp