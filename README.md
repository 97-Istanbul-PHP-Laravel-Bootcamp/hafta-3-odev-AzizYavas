# 3. Hafta Ödevi

## Laravel ile E-Ticaret Sistemi

Laravel kullanarak aşağıda belirtilen ve daha önce oluşturmuş olduğunuz admin sayfalarının veritabansal işlerini ve Migration, Model yapısını oluşturmanız
gerekmektedir.

### Kategori Tablo Yapısı

- title  : Kategori Başlığı
- description : Kategori Açıklaması
- slug : Url adresi
- status : Aktif, pasif, çöpte
- created_at : oluşturulma tarihi
- updated_at : güncelleme tarihi

### Ürün Tablo Yapısı

- category_id : Kategori ID bilgisi
- user_id : Ürünü ekleyen Kullanıcı ID bilgisi
- unicode : stok numarası
- slug : url adresi
- title : ürün başlığı
- description : ürün açıklaması
- order : ürün sırası
- status : aktif , pasif , çöpte
- prc : ürün fiyatı
- cid : ürün kur bilgisi ( 1 : TL , 2 : Dolar , 3 : Euro)
- created_at : oluşturulma tarihi
- updated_at : güncelleme tarihi

### Kullanıcı Tablo Yapısı

- uname : Kullanıcı Adı
- pass : Şifre
- mail : E-posta adresi
- mpno : Telefon Numarası
- fname : Adı
- lname : Soyadı
- status : aktif , pasif , çöpte
- created_at : oluşturulma tarihi
- updated_at : güncelleme tarihi

### Satış Tablo Yapısı

- user_id : Satın alan kullanıcı ID bilgisi
- orid : Sipariş Numarası
- product_id : Ürün ID bilgisi
- code : Satış Numarası
- prc : satış fiyatı
- cid : Satış kuru bilgisi ( 1 : TL , 2 : Dolar , 3 : Euro)
- sale_date : Satış Tarihi
- created_at : oluşturulma tarihi
- updated_at : güncelleme tarihi

Hafta 2 ödevinde yapmış olduğunuz proje üzerinden devam etmelisiniz ve ilgili yapıların admin panel üzerinden CRUD işlemlerinin yapılıyor olması gerekmektedir.
