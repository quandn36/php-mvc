<?php
class phantrang extends database
{

	/**
	 * Đầu tiên phải xác định xem trang có tổng báo nhiêu bản ghi
	 * Muốn có bao nhiêu bản ghi trến trang
	 * tính số trang sẽ được chia ra = ceil(Tổng trang/ giới hạn)
	 * dùng vòng lặp để hiển thị ra các trang và link của nó
	 * xác định tổng số trang: total
	 * xác định số trang giới hạn: limit
	 * có muốn full trang hay không: full
	 * GET id để nhận page
	 */
	private $config = [
		'total' 		=> 0,
		'limit' 		=> 0,
		'full' 			=> true,
		'querystring' 	=> 'page',
	];


	/**
	 * khởi tạo
	 * kiểm tra trong có @limit, @total đủ điều kiện hay không
	 * Nếu không thì dừng chương trình và display thông báo cho người dùng
	 * kiểm tra có @querystring hay không
	 * Mặc định là @page
	 * 
	 */
	public function __construct($config = [])
    {
        // kiểm tra xem trong config có limit, total đủ điều kiện không
        if (isset($config['limit']) && $config['limit'] < 0 || isset($config['total']) && $config['total'] < 0) {
            // nếu không thì dừng chương trình và hiển thị thông báo.
            die('limit và total không được nhỏ hơn 0');
        }
        // Kiểm tra xem config có querystring không
        if (!isset($config['querystring'])) {
            //nếu không để mặc định là page
            $config['querystring'] = 'page';
        }
        $this->config = $config;
    }


	/**
	 * lấy ra tổng số lượng trang và làm tròn bằng hàm ceil trong php
	 * phòng trường hợp số bị lẻ
	 *
	 */
	private function gettotalPage()
    {
        return ceil($this->config['total'] / $this->config['limit']);
    }


	/**
	 * Check isset $_GET['querystring'] and >= 1 hay không?
	 * không thì trả về 1
	 * check $_GET['querystring'] > tổng số @trang hay không
	 * nếu lớn hơn thì trả về tổng số @trang
	 * 
	 */
	private function getCurrentPage()
    {
        // kiểm tra tồn tại GET querystring và có >=1 không
        if (isset($_GET[$this->config['querystring']]) && (int)$_GET[$this->config['querystring']] >= 1) {
            // Nếu có kiểm tra tiếp xem nó có lớn hơn tổn số trang không.
            if ((int)$_GET[$this->config['querystring']] > $this->gettotalPage()) {
                // nếu lớn hơn thì trả về tổng số page
                return (int)$this->gettotalPage();
            } else {
                // còn không thì trả về số trang
                return (int)$_GET[$this->config['querystring']];
            }

        } else {
            // nếu không có querystring thì nhận mặc định là 1
            return 1;
        }
    }


	/**
	 * lấy ra trang phía trước
	 * nếu trang hiện tại bằng 1 thì trả bề null
	 * ngược lại trả về html code trang phía trước
	 */
	private function getPrePage() {

        // nếu trang hiện tại bằng 1 thì trả về null
        if ($this->getCurrentPage() === 1) {
            return;
        } else {
            // còn không thì trả về html code
            return '<li class="liPhantrang"><a href="' . $_SERVER['REQUEST_URI']. '&' . $this->config['querystring'] . '=' . ($this->getCurrentPage() - 1) . '" >Pre</a></li>';
        }
    }


	/**
	 * lấy ra trang tiếp theo
	 * check nếu trang hiện tại > hơn tổng trang thì trả về null
	 * ngược lại là có trang tiếp theo thì trả về html code trang tiếp theo
	 */
	
	private function getNextPage() {

        // nếu trang hiện tại lơn hơn = totalpage thì trả về rỗng
        if ($this->getCurrentPage() >= $this->gettotalPage()) {
            return;
        } else {
            // còn không thì trả về HTML code
            return '<li class="liPhantrang"><a href="' . $_SERVER['REQUEST_URI']. '&' . $this->config['querystring'] . '=' . ($this->getCurrentPage() + 1) . '" >Next</a></li>';
        }
    }


	/**
	 * hiển thị html code của page
	 * check config['full'] có true hay không (người dùng mướn full phân trang hay không?)
	 * nếu có thì dùng vòng lặp hiển thị hết trang ra cho người dùng
	 *
	 * ngược lại thị ít lại thay thế bằng máy dấu chấm
	 * dùng vòng lặp 
	 *$_SERVER['REQUEST_URI']. '&' .
	 */
	public function getPagination()
    {
        // tạo biến data rỗng
        $data = '';
        // kiểm tra xem người dùng có cần full page không.
        if (isset($this->config['full']) && $this->config['full'] === false) {
            // nếu không thì
            $data .= ($this->getCurrentPage() - 3) > 1 ? '<li>...</li>' : '';

            for ($i = ($this->getCurrentPage() - 3) > 0 ? ($this->getCurrentPage() - 3) : 1; $i <= (($this->getCurrentPage() + 3) > $this->gettotalPage() ? $this->gettotalPage() : ($this->getCurrentPage() + 3)); $i++) {
                if ($i === $this->getCurrentPage()) {
                    $data .= '<li class="active" ><a href="#" >' . $i . '</a></li>';
                } else {
                    $data .= '<li class="liPhantrang"><a href="' . $_SERVER['REQUEST_URI']. '&' . $this->config['querystring'] . '=' . $i . '" >' . $i . '</a></li>';
                }
            }

            $data .= ($this->getCurrentPage() + 3) < $this->gettotalPage() ? '<li>...</li>' : '';
        } else {
            // nếu có thì
            for ($i = 1; $i <= $this->gettotalPage(); $i++) {
                if ($i === $this->getCurrentPage()) {
                    $data .= '<li class="active" ><a href="#" >' . $i . '</a></li>';
                } else {
                    $data .= '<li class="liPhantrang"><a href="' . $_SERVER['REQUEST_URI']. '&' . $this->config['querystring'] . '=' . $i . '" >' . $i . '</a></li>';
                }
            }
        }

        return '<ul class="ulPhantrang">' . $this->getPrePage() . $data . $this->getNextPage() . '</ul>';
    }

}
