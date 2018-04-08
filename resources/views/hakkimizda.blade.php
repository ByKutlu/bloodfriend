@extends('main_template')

@section('title')

@endsection
@section('content')
      <div class="col-md-12">
        <div class="card">
            <div class="card-header" data-background-color="red">
                <h4 class="title">Hakkımızda</h4>
                <p class="category">Kan Dostum Projesinin Vizyonu ve Misyonu!</p>

            </div>
            <div class="card-content table-responsive">
                <div class="card-content">
                   <p>
                       İnsan sağlığının çok önemli olması nedeniyle sağlık sektöründe sürekli çalışmalar
                       yapılmaktadır. Bu çalışmalardan bir tanesi de acil kan ihtiyacı durumunda olabildiğince
                       hızlı kan ihtiyacını karşılayabilmektir. Türkiye’de kan ihtiyaçlarının büyük kısmını Türk
                       Kızılayı sağlarken hastaneler de kendi bünyelerinde bu ihtiyaç için çalışmalar
                       yapmaktadır. Bu çalışmaların daha verimli sonuç verebilmesi için insanlarla olan iletişim
                       alt yapısı oldukça önemlidir. Türk Kızılayı insanlara ulaşabilmek için sürekli şehir
                       meydanlarında, okullarda veya insanların yoğun olduğu yerlerde kan toplama stantları
                       kurar. Hastaneler ise kendi bünyelerinde kan toplama birimi bulundurur.
                   </p><p>
                       Projede acil durumlarda kan toplama kuruluşlarıyla donörlerin oldukça hızlı bir
                       şekilde buluşturulması hedeflenmektedir. Bu hedef için günümüzde yaygın olarak
                       kullanılan akıllı telefonlara uygulama geliştirilmektedir. Bu uygulama ile kan toplama
                       kuruluşları acil durumlarda büyük bir insan kitlesine rahatlıkla erişebilecektir. Bu sayede
                       hasta için en hızlı kan bulma işlemi gerçekleşebilir. Ayrıca ekonomik olarak hastaya
                       ulaşma maliyetinden tasarruf edilir.
                    </p><p>
                       Proje sonucunda kurum yöneticileri ve kurum çalışanları için bir web uygulaması,
                       donörler için ise mobil uygulama geliştirilmesi hedeflenmektedir. Web uygulamasında
                       kurum, ihtiyacı olan kan talebini bildirdiğinde kuruma yakın olan ve talebe uygun olan
                       dönörlerin mobil uygulamasına bildirim düşmesi hedeflenmektedir. Web uygulaması
                       tarafında kurum yöneticisi, çalışanlar üzerindeki düzenlemeleri yapabilir ve kan talebi
                       oluşturabilir, çalışanlar ise sadece kan talebi oluşturabilir. Mobil uygulama tarafında ise
                       donörler gelen kan bağış taleplerine cevap verebilirler.
                   </p>

                    <p>Kan Dostum Projesi, Dokuz Eylül Üniversitesi Bilgisayar Mühendisliği bölümü öğrecileri olan <b>Emrah EMREM</b> , <b>Osman KUTLU</b> ve <b> Sercan OKTAY</b>  geliştirmiştir.
                    <p>Danışmanlığını <b>Prof.Dr. Yalçın CEBİ </b> yapmaktadır.</p>
                    </p>
                </div>
            </div>
        </div>
    </div>


    {{dd(session()->all())}}
@endsection