<font face="Arial">
    <div>
        <div></div>
        <h3><font style="color: #FF9600">Thông tin khách hàng</font></h3>
        <p>
            <strong>Khách hàng :</strong>
            {{ $info['name'] }}
        </p>
        <p>
            <strong>Email :</strong>
            {{ $info['email'] }}
        </p>
        <p>
            <strong>Điện thoại :</strong>
            {{ $info['phone'] }}
        </p>
        <p>
            <strong>Địa chỉ :</strong>
            {{ $info['address'] }}
        </p>
        <div>
            <h3><font style="color: #FF9600">Hóa đơn mua hàng</font></h3>
            <table border="1" cellspacing="0">
                <tr>
                    <td><strong>Tên sản phẩm</strong></td>
                    <td><strong>Giá</strong></td>
                    <td><strong>Số lượng</strong></td>
                    <td><strong>Thành tiền</strong></td>
                </tr>
                @foreach ($cart as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->qty }}</td>
                    <td>{{ number_format($item->price*$item->qty,0,',','.') }}</td>
                </tr>
                    
                @endforeach
                <tr>
                    <td>Tổng tiền :</td>
                    <td colspan="3" align="right">{{ $total }}</td>
                </tr>
            </table>
        </div>
    </div>
</font>