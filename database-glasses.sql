create database GLASSES character set='utf8';
use GLASSES;
drop database glasses;
create table sanPham(
	ma_san_pham character(10) primary key,
    ten_san_pham varchar(40) not null,
    gia_san_pham int not null,
    mo_ta_san_pham text(1000) not null,
    mau_sac varchar(50) not null,
    hinh_anh varchar(128) not null,
    ma_loai_san_pham character(10),
    foreign key (ma_loai_san_pham) references loaiSanPham(ma_loai_san_pham)
);

create table loaiSanPham(
	ma_loai_san_pham character(10) primary key,
    ten_loai_san_pham varchar(40) not null
);


create table hoaDon(
	ma_hoa_don int primary key auto_increment,
    ngay_lap_hoa_don datetime not null,
    tong_tien float(13) not null,
    hinh_thuc_thanh_toan varchar(50) not null ,
    ma_nguoi_dung int,
    foreign key (ma_nguoi_dung) references nguoiDung(ma_nguoi_dung),
    dia_chi text,
    trang_thai_thanh_toan varchar(50) not null,
    trang_thai_giao_hang varchar(50) not null
);
create table chitietHoadon(
	ma_hoa_don int,
    ma_san_pham character(10),
    primary key(ma_hoa_don, ma_san_pham),
    so_luong_sp int
);

create table gioHang(
	ma_nguoi_dung int,
    foreign key (ma_nguoi_dung) references nguoiDung(ma_nguoi_dung),
	ma_gio_hang int primary key auto_increment
);

create table chitietGioHang(
	ma_san_pham character(10),
    ma_gio_hang int,
    so_luong_san_pham int,
    primary key (ma_san_pham, ma_gio_hang)
);


create table taiKhoan(
	email varchar(50) primary key,
    mat_khau character(8) not null
);

create table nguoiDung(
	ma_nguoi_dung int primary key auto_increment,
    ten_nguoi_dung varchar(40) not null,
    so_dien_thoai character(10) not null,
    email varchar(128),
    foreign key(email) references taiKhoan(email) 
);

select * from chitiethoadon;
select * from chitietgiohang;
select * from nguoiDung;
drop table chitiethoadon;

insert into taiKhoan value('admin@gmail.com', 'admin');
insert into nguoiDung(ten_nguoi_dung, so_dien_thoai, email) value('Admin', '0384944147', 'admin@gmail.com');

insert into loaiSanPham value ('L01', 'Nam');
insert into loaiSanPham value ('L02', 'Nữ');

	-- NAM --
insert into sanPham value ('SP01', 'MẮT KÍNH DÁNG CÁNH BƯỚM', '11500000', 'Nhựa acetate cao cấp', 'Màu nâu', 'sp1.webp', 'L01');

insert into sanPham value ('SP02', 'KÍNH MÁT DÁNG VUÔNG', '17000000', 'Kim loại & Da bê', 'Vàng ánh kim & Xanh lá', 'sp2.webp', 'L01');

insert into sanPham value ('SP03', 'KÍNH MÁT DÁNG VUÔNG', '12500000', 'Kim loại và Hạt đá', 'Màu bạc. Tròng kính: Xám', 'sp3.webp', 'L01');

insert into sanPham value ('SP04', 'KÍNH MÁT DÁNG VUÔNG', '13000000', 'Kim loại & Da bê', 'Vàng ánh kim & Xanh lá', 'sp4.webp', 'L01');

insert into sanPham value ('SP05', 'KÍNH MÁT DÁNG BẦU DỤC', '12200000','Nhựa acetate cao cấp', 'Màu đen. Tròng kính: Xám', 'sp5.webp', 'L01');

insert into sanPham value ('SP06', 'KÍNH MÁT DÁNG SHIELD', '14800000','Nhựa Acetate cao cấp & Hạt đá', 'Iridescent Brown. Tròng kính: Nâu', 'sp6.webp', 'L01');

insert into sanPham value ('SP07', 'KÍNH RÂM HÌNH CHỮ NHẬT', '19500000','Hình dạng hình chữ nhật với tinh thần thành thị', 'Màu ngà', 'sp7.jpg', 'L01');

insert into sanPham value ('SP08', 'KÍNH RÂM HÌNH TRÒN', '19700000','Hình dáng tròn trịa mang tinh thần cổ điển', 'Màu xanh nhạt', 'sp8.jpg', 'L01');

insert into sanPham value ('SP09', 'KÍNH RÂM HÌNH CHỮ NHẬT', '17500000','Hình dạng đỉnh phẳng hình chữ nhật thanh lịch', 'Màu đen', 'sp9.jpg', 'L01');

insert into sanPham value ('SP10', 'KÍNH RÂM HÌNH CHỮ NHẬT', '17200000','Hiệu ứng vỏ rùa màu nâu và gọng kim loại bạc', 'Màu nâu', 'sp10.jpg', 'L01');

insert into sanPham value ('SP11', 'KÍNH RÂM VUÔNG ĐEN', '12500000','Hình vuông được làm bằng chất liệu axetat màu đen với phần chơi âm lượng cho vẻ ngoài quyết đoán', 'Màu đen', 'sp11.jpg', 'L01');

insert into sanPham value ('SP12', 'KÍNH RÂM HIỆU ỨNG VỎ RÙA', '13200000','Gọng kính acetate hiệu ứng vỏ rùa màu nâu có tròng kính màu xanh lục khoáng', 'Màu nâu', 'sp12.jpg', 'L01');


	-- NỮ --

insert into sanPham value ('SP13', 'MẮT KÍNH DÁNG CÁNH BƯỚM', '11500000','Nhựa acetate cao cấp', 'Màu đen', 'sp13.webp', 'L02');

insert into sanPham value ('SP14', 'MẮT KÍNH DÁNG CHỮ NHẬT', '1380000','Nhựa acetate cao cấp', 'Màu nâu trong suốt', 'sp14.webp', 'L02');

insert into sanPham value ('SP15', 'MẮT KÍNH DÁNG VUÔNG', '13800000','Kim loại và Hạt đá', 'Đen & Vàng ánh kim', 'sp15.webp', 'L02');

insert into sanPham value ('SP16', 'MẮT KÍNH DÁNG VUÔNG', '17500000','Nhựa acetate cao cấp', 'Màu đen', 'sp16.webp', 'L02');

insert into sanPham value ('SP17', 'MẮT KÍNH DÁNG CÁNH BƯỚM', '13500000','Kim loại và Hạt đá', 'Màu đen. Tròng kính: Xám', 'sp17.webp', 'L02');

insert into sanPham value ('SP18', 'MẮT KÍNH DÁNG CÁNH BƯỚM', '12500000','Nhựa acetate cao cấp', 'Màu đen', 'sp18.webp', 'L02');

insert into sanPham value ('SP19', 'KÍNH RÂM HÌNH BƯỚM', '18500000','Gọng kính siêu mỏng bằng kim loại mạ vàng được tăng cường bởi tròng kính màu hồng nhạt', 'Màu hồng nhạt', 'sp19.jpg', 'L02');

insert into sanPham value ('SP20', 'KÍNH RÂM HÌNH BƯỚM', '13800000','Khung đồ họa siêu mỏng bằng kim loại hoàn thiện bằng vàng được tăng cường bởi thấu kính màu vàng', 'Màu vàng', 'sp20.jpg', 'L02');

Insert into sanPham value ('SP21', 'KÍNH RÂM HÌNH BƯỚM', '18500000','Một thiết kế hình con bướm hiện đại và táo bạo', 'Màu trắng', 'sp21.jpg', 'L02');

insert into sanPham value ('SP22', 'KÍNH RÂM HÌNH BƯỚM', '17000000','Tô điểm thêm bằng một đường kim loại hoàn thiện bằng vàng ở cuối thấu kính màu xám', 'Màu đen', 'sp22.jpg', 'L02');

insert into sanPham value ('SP23', 'KÍNH RÂM HÌNH CHỮ NHẬT', '14500000','Tô điểm bằng các đường kim loại hoàn thiện bằng vàng', 'Màu xám', 'sp23.jpg', 'L02');

insert into sanPham value ('SP24', 'KÍNH RÂM MẶT NẠ', '12500000','Hình dạng hình chữ nhật cong với sự hấp dẫn của trang phục thể thao', 'Màu ngà', 'sp24.jpg', 'L02');

