<?php
class Employee
{
    private $ho;
    private $ten;
    private $ngaysinh;
    private $diachi;
    private $vitri;
    
    public function __construct($ho,$ten,$ngaysinh,$diachi,$vitri){
        $this->ho = $ho;
        $this->ten = $ten;
        $this->ngaysinh = $ngaysinh;
        $this->diachi = $diachi;
        $this->vitri = $vitri;
    }
}


    class maEmployee 
    {
        private array $Employee;
    static array $ds;
    public function __construct()
    {
        $this->Employee=[];
        self::$ds=[];
    }
    public function add($employees)///thêm nhân sự
    {
        $this->Employee[]=$employees;
    }
    public function getEmployee(): array///in ra chi tiết nhân sự
    {
        return $this->Employee;
    }

    }
$a = new maEmployee();
   $a->add(new Employee("xuan","thang",7,"giolinh","nhanvien"))  ;
    $a->add(new Employee("van","phi",6,"giolinh","nhanvien")) ;
    $a->add(new Employee("xuan","cuong",29,"giolinh","nhanvien")) ; 
    echo '<pre>';
print_r($a);
echo '</pre>';









    // class Employee 
    // {
    //     private $ma_nv;
    //     private $ho_va_ten;
    //     private $so_dien_thoai;
    //     private $email;
    //     private $bang_du_lieu = 'data.json';
    //      //phương thức lưu dữ liệu
    //      public function luu_du_lieu(){
    //          $ma_nv_tiep_theo = this-> lay_id_tiep_theo();
    //     //tạo mảng data_employee
    //     $data_employee = [
    //         'ma_nv' => $ma_nv_tiep_theo,
    //         'ho_va_ten' => $ho_va_ten,
    //         'so_dien_thoai' => $so_dien_thoai,
    //         'email' => $email

    //     ];
    //     $data_array[] = $this-> lay_ta_ca();
    //     echo '<pre>';
    //     print_r($data_array);
    //     echo '<pre>';
    //     //dựa vào mảng mới với đối tượng truyền vào
    //     $data_array[] = $data_employee;
    //     //chuyển array sang json
    //     $array_to_json = json_encode($data_array);
    //     //lưu vào
    //      }
    // }
  
   

  
?>
