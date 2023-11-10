</div>

<script>
    let checkall = document.getElementById('checkall');
    let clearall = document.getElementById('clearall');
    let deleteall = document.getElementById('delete-all');


    let checkbox = document.getElementsByClassName('checkbox');


    // sự kiến checkall
    checkall.addEventListener('click', function(){
        for (let i=0;i<checkbox.length;i++) {
            checkbox[i].checked = true;
        }
    })
    clearall.addEventListener('click', function(){
        for (let i=0;i<checkbox.length;i++) {
            checkbox[i].checked = false;
        }
    })
    
    // kiểm tra xem người dùng có chọn cái nào chưa
    function check_seletect () {
        for (let i=0; i<checkbox.length;i++){
            if(checkbox[i].checked==true){
                return true;
            }
        }
        return false;
    }
    // xử lý nút xoá khi chua chọn thì k cho gửi dữ liệu lê sever
    deleteall.addEventListener('click', function(event){
        if(check_seletect() === false){
            alert("Bạn cần chọn ít nhất 1 danh mục để xoá.");
            event.preventDefault(); // không cho phép kích hoạt sự kiện gửi dữ liệu lên sever
            return false;
        }
    })
</script>

</body>

</html>