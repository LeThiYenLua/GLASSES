create database PERFUME character set='utf8';
use PERFUME;

create table sanPham(
	ma_san_pham character(10) primary key,
    ten_san_pham varchar(40) not null,
    gia_san_pham int not null,
    mo_ta_san_pham text(1000),
    dung_tich varchar(10),
    hinh_anh varchar(128) not null,
    ma_loai_san_pham character(10),
    foreign key (ma_loai_san_pham) references loaiSanPham(ma_loai_san_pham),
    ma_thuong_hieu character(10),
    foreign key (ma_thuong_hieu) references thuongHieu(ma_thuong_hieu)
);

create table loaiSanPham(
	ma_loai_san_pham character(10) primary key,
    ten_loai_san_pham varchar(40) not null
);

create table thuongHieu(
	ma_thuong_hieu character(10) primary key,
    ten_thuong_hieu varchar(40) not null
);

create table hoaDon(
	ma_hoa_don int primary key auto_increment,
    ngay_lap_hoa_don datetime not null,
    tong_tien float(13) not null,
    hinh_thuc_thanh_toan varchar(50) not null,
    ma_nguoi_dung int,
    foreign key (ma_nguoi_dung) references nguoiDung(ma_nguoi_dung),
    dia_chi text,
    trang_thai_thanh_toan varchar(50) not null,
    trang_thai_giao_hang varchar(50) not null
);
create table chitietHoadon(
	ma_hoa_don int,
    foreign key (ma_hoa_don) references hoaDon(ma_hoa_don),
    ma_san_pham character(10),
    foreign key (ma_san_pham) references sanPham(ma_san_pham),
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


insert into taiKhoan value('admin@gmail.com', 'admin');
insert into nguoiDung(ten_nguoi_dung, so_dien_thoai, email) value('Admin', '0384944147', 'admin@gmail.com');



insert into thuongHieu value ('TH01', 'CHANEL');
insert into thuongHieu value ('TH02', 'DIOR');
insert into thuongHieu value ('TH03', 'GUCCI');

insert into loaiSanPham value ('L01', 'Nam');
insert into loaiSanPham value ('L02', 'Nữ');

-- SẢN PHẨM CHANEL --

	-- NAM --
insert into sanPham value ('SP01', 'ALLURE HOMME SPORT', '2500000', 'XỊT KHỬ MÙI', '100', 'allure.webp', 'L01', 'TH01');
insert into sanPham value ('SP02', 'ALLURE HOMME SPORT', '3000000', 'EAU DE TOILETTE DẠNG XỊT', '150', 'allure1.webp', 'L01', 'TH01');
insert into sanPham value ('SP03', 'ALLURE HOMME SPORT', '3000000', 'COLOGNE DẠNG XỊT', '100', 'allure2.webp', 'L01', 'TH01');
insert into sanPham value ('SP04', 'ALLURE HOMME SPORT', '4500000', 'EAU DE TOILETTE DẠNG XỊT PHIÊN BẢN DU LỊCH', '3x20', 'allure3.webp', 'L01', 'TH01');
insert into sanPham value ('SP05', 'BLEU DE CHANEL', '2500000', 'PHIÊN BẢN PARFUM DẠNG XỊT', '100', 'bleu_de.webp', 'L01', 'TH01');
insert into sanPham value ('SP06', 'BLEU DE CHANEL', '2500000', 'DẠNG XỊT', '100', 'Nuoc-hoa-chanel6.webp', 'L01', 'TH01');
insert into sanPham value ('SP07', 'BLEU DE CHANEL', '4500000', 'EAU DE TOILETTE PHIÊN BẢN RECHARGE - REFILL', '3x20', 'eau_de.webp', 'L01', 'TH01');
insert into sanPham value ('SP08', 'ÉGOÏSTE', '3000000', 'EAU DE TOILETTE DẠNG XỊT', '100', 'egoiste.webp', 'L01', 'TH01');
insert into sanPham value ('SP09', 'BLEU DE CHANEL', '4500000', 'PHIÊN BẢN PARFUM TWIST AND SPRAY', '3x20', 'bleu_de_chanel.webp', 'L01', 'TH01');
insert into sanPham value ('SP10', 'BLEU DE CHANEL', '2500000', 'XỊT TOÀN THÂN', '100', 'bleu_de1.webp', 'L01', 'TH01');
insert into sanPham value ('SP11', 'BLEU DE CHANEL', '1500000', 'EAU DE PARFUM DẠNG XỊT', '25', 'Nuoc-hoa-chanel7.jpg', 'L01', 'TH01');
insert into sanPham value ('SP12', 'POUR MONSIEUR', '3000000', 'EAU DE TOILETTE DẠNG XỊT', '100', 'pour_monsieur.webp', 'L01', 'TH01');

	-- NỮ --
insert into sanPham value ('SP13', 'N°5', '2000000', 'NƯỚC HOA CHO TÓC', '40', 'no5_hair1.jpg', 'L02', 'TH01');   
insert into sanPham value ('SP14', 'N°5', '1800000', 'NƯỚC HOA CHO TÓC N°5', '35', 'no5_hair.webp', 'L02', 'TH01');    
insert into sanPham value ('SP15', 'N°5', '2500000', 'EAU PREMIÈRE DẠNG XỊT', '100', 'no5_chanel.webp', 'L02', 'TH01');    
insert into sanPham value ('SP16', 'N°5 L’EAU', '2000000', 'EAU DE TOILETTE DẠNG XỊT', '100', 'Leau_1.webp', 'L02', 'TH01');
insert into sanPham value ('SP17', 'CRISTALLE', '3000000', 'EAU DE PARFUM DẠNG XỊT', '100', 'no5_paris.jpg', 'L02', 'TH01');
insert into sanPham value ('SP18', 'COCO MADEMOISELLE', '3000000', 'EAU DE PARFUM INTENSE DẠNG XỊT', '100', 'Nuoc-hoa-chanel2.jpg', 'L02', 'TH01');
insert into sanPham value ('SP19', 'CHANCE', '3000000', 'EAU DE PARFUM DẠNG XỊT', '100', 'Nuoc-hoa-chanel3.jpg', 'L02', 'TH01');
insert into sanPham value ('SP20', 'CHANCE EAU FRAÎCHE', '3000000', 'EAU DE TOILETTE DẠNG XỊT', '100', 'Nuoc-hoa-chanel4.jpg', 'L02', 'TH01');
insert into sanPham value ('SP21', 'CHANCE EAU TENDRE', '3000000', 'EAU DE TOILETTE DẠNG XỊT', '100', 'Nuoc-hoa-chanel5.jpg', 'L02', 'TH01');
insert into sanPham value ('SP22', 'GABRIELLE CHANEL', '3000000', 'NƯỚC HOA DÀNH CHO TÓC', '40', 'Nuoc-hoa-chanel9.jpg', 'L02', 'TH01');
insert into sanPham value ('SP23', 'GARDENIA PARIS', '3000000', 'EAU DE TOILETTE DẠNG XỊT', '100', 'Nuoc-hoa-chanel8.jpg', 'L02', 'TH01');
insert into sanPham value ('SP24', 'GABRIELLE CHANEL', '3000000', 'EAU DE PARFUM DẠNG XỊT', '100', 'Nuoc-hoa-chanel1.jpg', 'L02', 'TH01');



-- SẢN PHẨM DIOR --

	-- NAM --
insert into sanPham value ('SP25', 'DIOR HOMME SPORT', '15000000', 'Eau de Toilette - Fresh, Woody and Spicy Notes', '125', 'dior_sport.jpg', 'L01', 'TH02');
insert into sanPham value ('SP26', 'SAUVAGE', '15000000', 'After-Shave Balm - Moisturizes and Soothes', '100', 'sauvage.jpg', 'L01', 'TH02');
insert into sanPham value ('SP27', 'SAUVAGE', '9500000', 'Eau de toilette', '60', 'sauvage1.jpg', 'L01', 'TH02');
insert into sanPham value ('SP28', 'SAUVAGE', '18000000', 'Very cool spray - fresh eau de toilette - 100% air spray', '100', 'sauvage2.jpg', 'L01', 'TH02');
insert into sanPham value ('SP29', 'SAUVAGE', '22000000', 'Eau de toilette (refill)', '300', 'sauvage3.jpg', 'L01', 'TH02');
insert into sanPham value ('SP30', 'SAUVAGE', '15000000', 'Eau de parfum', '60', 'sauvage4.jpg', 'L01', 'TH02');


	-- NỮ --
insert into sanPham value ('SP31', "J'ADORE EAU DE PARFUM INFINISSIME", '3000000', 'An endless burst of flowers released in an infinitely exalted bouquet', '50', 'dior7.jpg', 'L02', 'TH02');
insert into sanPham value ('SP32', 'MISS DIOR', '13000000', 'Eau de Parfum', '30', 'dior8.jpg', 'L02', 'TH02');
insert into sanPham value ('SP33', 'MISS DIOR', '11000000', 'Eau de Parfum Roller-pearl - Roll-On Eau de Parfum', '20', 'dior9.jpg', 'L02', 'TH02');
insert into sanPham value ('SP34', "MISS DIOR ROSE N'ROSES", '15000000', 'Eau de toilette', '50', 'dior10.jpg', 'L02', 'TH02');
insert into sanPham value ('SP35', "MISS DIOR ROSE N'ROSES", '10000000', 'Eau de toilette Roller-Pearl - Roll-On Fragrance', '20', 'dior11.jpg', 'L02', 'TH02');
insert into sanPham value ('SP36', 'MISS DIOR', '18000000', 'Eau de Toilette', '50', 'dior12.jpg', 'L02', 'TH02');
insert into sanPham value ('SP37', "J'ADORE EAU DE PARFUM", '25000000', 'Gift Case - Eau de Parfum - Floral Notes', '100', 'collection_dior.jpg', 'L02', 'TH02');
insert into sanPham value ('SP38', "J'ADORE", '13000000', 'Eau de parfum', '30', 'dior1.jpg', 'L02', 'TH02');
insert into sanPham value ('SP39', "J'ADORE", '15000000', 'Eau de toilette', '50', 'dior2.jpg', 'L02', 'TH02');


-- SẢN PHẨM GUCCI --

	-- NAM --
insert into sanPham value ('SP40', 'Gucci Guilty Pour Homme', '25000000', 'Eau de parfum', '90', 'gucci_guilty_4.jpg', 'L01', 'TH03');
insert into sanPham value ('SP41', 'Gucci Guilty Oud', '2500000', 'Eau de parfum', '90', 'gucci_guilty_2.jpg', 'L01', 'TH03');
insert into sanPham value ('SP42', 'Gucci Guilty Black', '25000000', 'Eau de parfum', '90', 'gucci_guilty_3.jpg', 'L01', 'TH03');
insert into sanPham value ('SP43', 'Gucci', '3000000', 'Pour Homme', '100', 'gucci_gucci.jpg', 'L01', 'TH03');
insert into sanPham value ('SP44', "Gucci Mémoire d'une Odeur", '2500000', 'Eau de parfum', '100', 'gucci_memoi.jpg', 'L01', 'TH03');
insert into sanPham value ('SP45', 'Gucci', '2000000', 'Gucci By Gucci', '90', 'gucci5.png', 'L01', 'TH03');
insert into sanPham value ('SP46', 'The Voice of the Snake', '3500000', 'Eau de parfum', '100', 'Gucci-Pour-Homme.jpg', 'L01', 'TH03');
insert into sanPham value ('SP47', 'A Chant for the Nymph', '3500000', 'Eau de parfum', '100', 'Gucci-Pour-Homme1.jpg', 'L01', 'TH03');


	-- NỮ --
insert into sanPham value ('SP48', 'Gucci Flora', '2000000', 'Eau de parfum', '25', 'gucci2.jpg', 'L02', 'TH03');    
insert into sanPham value ('SP49', 'Gucci Flora', '2200000', 'Eau de parfum', '50', 'gucci7.png', 'L02', 'TH03');
insert into sanPham value ('SP50', 'Gucci Flora', '2000000', 'Eau de toilette', '25', 'gucci6.png', 'L02', 'TH03');
insert into sanPham value ('SP51', 'Gucci Bloom', '3000000', 'Eau de toilette', '100', 'gucci3.png', 'L02', 'TH03');
insert into sanPham value ('SP52', 'Gucci Bloom', '3000000', 'Eau de Parfum Intense', '100', 'gucci4.jpg', 'L02', 'TH03');
insert into sanPham value ('SP53', 'Gucci Bloom', '3000000', 'Eau de Parfum', '100', 'gucci5.png', 'L02', 'TH03');
insert into sanPham value ('SP54', 'Gucci Flora', '2500000', 'Gorgeous Gardenia', '50', 'gucci15.jpg', 'L02', 'TH03');
insert into sanPham value ('SP55', 'Gucci Flora', '3000000', 'Gorgeous Gardenia', '100', 'gucci16.jpg', 'L02', 'TH03');
insert into sanPham value ('SP56', 'Gucci Flora Gorgeous Gardenia', '2200000', 'Eau de parfum', '50', 'gucci17.jpg', 'L02', 'TH03');

