<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Xuất báo cáo</title>

    <style>
        h1 {
            text-align: center;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        #customers {
            border-collapse: collapse;
            width: 100%;
        }

        #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #fff2e7;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #ff7506;
            color: white;
        }
    </style>
</head>
<body>
    <div>
        <h1>Bảng báo cáo cấp số</h1>
        <table id="customers">
            <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Tên dịch vụ</th>
                    <th scope="col">Thời gian cấp</th>
                    <th scope="col">Tình trạng</th>
                    <th scope="col">Nguồn cấp</th>
                </tr>
            </thead>
            {{-- <tr>
                <th scope="row">10210001</th>
                <td>Khám tim mạch</td>
                <td>14:35-07/11/2022</td>
                <td>đang chờ</td>
                <td>Nguồn cấp</td>
            </tr> --}}
            @foreach ($baocao as $item)
                    <tr>
                        <td>{{$item->stt}}</td>
                        <td>{{$item->dichvu->name_service}}</td>
                        <td>{{$item->created_at}}</td>
                        <td> 
                            @if ($item->status == 'Đang chờ')
                            <i class='bx bxs-circle' style='color:#4264e0'  ></i>
                            @elseif($item->status == 'Đã sử dụng')
                            <i class='bx bxs-circle' style='color:#9e9fa4'  ></i>
                            @else
                            <i class='bx bxs-circle' style='color:red'  ></i>
                            @endif
                            {{ $item->status }}
                        </td>
                        <td>{{$item->thietbi->name_device}}</td>
                    </tr>   
                    @endforeach     
        </table>
    </div>
</body>
</html>
