<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class Products extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //1
        DB::table('products')->insert([
            'p_name' => 'iPhone 15 128GB Chính hãng (VN/A)',
            'p_price_old' => 24990000,
            'cate_id' => 1,
            'p_price_new' => 18990000,
            'p_description' => 'iPhone 15 Pro Max là một chiếc điện thoại thông minh cao cấp được mong đợi nhất năm 2023. Với nhiều tính năng mới và cải tiến, iPhone 15 Pro Max chắc chắn sẽ là một lựa chọn tuyệt vời cho những người dùng đang tìm kiếm một chiếc điện thoại có hiệu năng mạnh mẽ, camera chất lượng và thiết kế sang trọng.

            • Sản phẩm chính hãng, đảm bảo chất lượng: Thế Giới Di Động là nhà bán lẻ điện thoại di động lớn nhất Việt Nam, cam kết cung cấp sản phẩm chính hãng, đảm bảo chất lượng. Bạn có thể yên tâm về xuất xứ sản phẩm và có thể tận hưởng trải nghiệm sử dụng tốt nhất.

            • Ưu đãi và khuyến mãi hấp dẫn: Thế Giới Di Động thường xuyên có các chương trình khuyến mãi, giảm giá và tặng quà kèm, giúp bạn tiết kiệm được một khoản tiền khi mua iPhone 15 Pro Max.

            • Hệ thống cửa hàng rộng khắp: Thế Giới Di Động có mạng lưới cửa hàng rộng khắp trên toàn quốc, giúp bạn dễ dàng tìm được một cửa hàng gần nhà để mua sắm. Bạn cũng có thể trực tiếp kiểm tra sản phẩm và nhận sự hỗ trợ từ nhân viên tại cửa hàng.

            • Dịch vụ hậu mãi chuyên nghiệp: Thế Giới Di Động cung cấp dịch vụ hậu mãi chuyên nghiệp, bao gồm bảo hành, sửa chữa và hỗ trợ kỹ thuật. Điều này giúp bạn yên tâm về việc sử dụng trong thời gian dài.

            • Trả góp linh hoạt: Thế Giới Di Động cung cấp các lựa chọn trả góp phù hợp với ngân sách của bạn, giúp bạn mua được sản phẩm mong muốn mà không cần thanh toán toàn bộ số tiền một lúc.

            • Uy tín và kinh nghiệm lâu năm: Với hơn 15 năm hoạt động trên thị trường, Thế Giới Di Động đã xây dựng được một uy tín mạnh mẽ trong ngành công nghiệp điện thoại di động. Điều này giúp bạn yên tâm về việc mua sắm tại Thế Giới Di Động.',
            'p_color' => '#f50000',
            'p_type' => 'Mobile Phones',
            'p_quantity' => 5,
            'p_photo1' => 'avatars/1715778856_4.jpg',
            'p_photo2' => 'avatars/1715778856_2.png',
            'p_photo3' => 'avatars/1715778856_3.png',
            'p_photo4' => 'avatars/1715778856_4.png',
            'p_photo5' => 'avatars/1715778856_5.png',
        ]);

        //2
        DB::table('products')->insert([
            'p_name' => 'iPhone 12 256GB Chính Hãng',
            'cate_id' => 1,
            'p_price_old' => 0,
            'p_price_new' => 26990000,
            'p_description' => 'Trong những tháng cuối năm 2020, Apple đã chính thức giới thiệu đến người dùng cũng như iFan thế hệ iPhone 12 series mới với hàng loạt tính năng bứt phá, thiết kế được lột xác hoàn toàn, hiệu năng đầy mạnh mẽ và một trong số đó chính là iPhone 12 64GB.
            Hiệu năng vượt xa mọi giới hạn
            Apple đã trang bị con chip mới nhất của hãng (tính đến 11/2020) cho iPhone 12 đó là A14 Bionic, được sản xuất trên tiến trình 5 nm với hiệu suất ổn định hơn so với chip A13 được trang bị trên phiên bản tiền nhiệm iPhone 11.

            Chip A14 Bionic mạnh mẽ | iPhone 12

            Xem thêm: Tìm hiểu về chip Apple A14 Bionic trên iPhone 12 và iPad Air 2020

            Với CPU Apple A14 Bionic, bạn có thể dễ dàng trải nghiệm mọi tựa game với những pha chuyển cảnh mượt mà hay hàng loạt hiệu ứng đồ họa tuyệt đẹp ở mức đồ họa cao mà không lo tình trạng giật lag.

            Chiến game siêu mượt, đồ họa tuyệt đẹp | iPhone 12

            Chưa hết, Apple còn gây bất ngờ đến người dùng với hệ thống 5G lần đầu tiên được trang bị trên những chiếc iPhone, cho tốc độ truyền tải dữ liệu nhanh hơn, ổn định hơn.

            Kết nối 5G truyền tải dữ liệu nhanh chóng | iPhone 12

            iPhone 12 sẽ chạy trên hệ điều hành iOS 15 (12/2021) với nhiều tính năng hấp dẫn như hỗ trợ Widget cũng như những nâng cấp tối ưu phần mềm đáng kể mang lại những trải nghiệm thú vị mới lạ đến người dùng.
            Bạn có thể khám phá thêm những tính năng của camera trên iPhone 12 như chế độ smart HDR 3 giúp cân bằng yếu tố ánh sáng trong ảnh, làm nổi bật chi tiết đối tượng và cây cối trong khi vẫn giữ được màu sắc phong phú của bầu trời ngay cả vào buổi trưa nắng gắt.

            Chụp ảnh với tính năng smart HDR 3 sắc nét, chất lượng | iPhone 12

            Chế độ chụp chân dung đã tốt nay còn tốt hơn trong việc làm mờ hậu cảnh một cách nghệ thuật để dồn hết sự tập trung vào đối tượng mà bạn muốn chụp.

            Nổi bật chủ thể với tính năng chụp chân dung độc đáo | iPhone 12

            Bạn sẽ dễ dàng quay video 4K HDR với chuẩn điện ảnh Dolby Vision và chỉnh sửa ngay trên chiếc điện thoại của mình, bạn có thể đưa video lên TV của bạn để thưởng thức thước phim sắc nét chất lượng cao.',
            'p_color' => '#f50000',
            'p_type' => 'Mobile Phones',
            'p_quantity' => 5,
            'p_photo1' => 'avatars/iphone-12-1.png',
            'p_photo2' => 'avatars/iphone-12-2.png',
            'p_photo3' => 'avatars/iphone-12-3.png',
            'p_photo4' => 'avatars/iphone-12-4.png',
            'p_photo5' => 'avatars/iphone-12-5.png',
        ]);

        //3
        DB::table('products')->insert([
            'p_name' => 'Laptop Apple MacBook Air 13 inch M1 8GB/256GB (MGN63SA/A)',
            'cate_id' => 2,
            'p_price_old' => 19590000,
            'p_price_new' => 18190000,
            'p_description' => 'Laptop Apple MacBook Air M1 2020 thuộc dòng laptop cao cấp sang trọng có cấu hình mạnh mẽ, chinh phục được các tính năng văn phòng lẫn đồ hoạ mà bạn mong muốn, thời lượng pin dài, thiết kế mỏng nhẹ sẽ đáp ứng tốt các nhu cầu làm việc của bạn.
            Chip Apple M1 tốc độ xử lý nhanh gấp 3.5 lần thế hệ trước
            <br>Chiếc MacBook này được trang bị con chip Apple M1 được sản xuất độc quyền bởi Nhà Táo trên tiến trình 5 nm, 8 lõi bao gồm 4 lõi tiết kiệm điện và 4 lõi hiệu suất cao, mang đến một hiệu năng kinh ngạc, xử lý mọi tác vụ văn phòng một cách mượt mà như Word, Excel, Powerpoint,... thực hiện tốt các nhiệm vụ chỉnh sửa hình ảnh, kết xuất 2D trên các phần mềm Photoshop, AI,... máy còn hỗ trợ tiết kiệm được điện năng cao.
            <br>Apple MacBook Air M1 2020 - Làm việc đa nhiệm
            <br>Đi cùng CPU là card đồ họa tích hợp 7 nhân GPU có hiệu năng vượt trội sau nhiều bài thử nghiệm hiệu năng đồ họa của benchmark, bạn có thể sử dụng nhiều phần mềm đồ họa chuyên nghiệp, thoả sức sáng tạo nội dung, render video ổn định với chất lượng hình ảnh cao.',
            'p_color' => '#a6a6a6',
            'p_type' => 'Laptop',
            'p_quantity' => 3,
            'p_photo1' => 'avatars/grey-1-org.jpg',
            'p_photo2' => 'avatars/grey-2-org.jpg',
            'p_photo3' => 'avatars/grey-3-org.jpg',
            'p_photo4' => 'avatars/grey-4-org.jpg',
            'p_photo5' => 'avatars/grey-5-org.jpg',
        ]);

        //4
        DB::table('products')->insert([
            'p_name' => 'Laptop Asus Vivobook 15 OLED A1505ZA i5 12500H/16GB/512GB/Win11 (L1337W)',
            'cate_id' => 2,
            'p_price_old' => 18990000,
            'p_price_new' => 16490000,
            'p_description' => 'Laptop Asus Vivobook 15 OLED A1505ZA i5 12500H (L1337W) có không gian hiển thị rộng rãi, sắc nét với màn hình 15.6 inch OLED cùng nhiều hiệu năng mạnh mẽ khác. Đây chắc hẳn là chiếc laptop đồ họa - kỹ thuật phù hợp với những bạn đang có đòi hỏi về đồ họa hay các công việc sáng tạo.\n
            • Laptop Asus Vivobook trang bị bộ xử lý Intel Core i5 - 12500H mạnh mẽ giúp bạn xử lý trơn tru các tác vụ từ văn phòng, giải trí đến đồ họa như thiết kế hình ảnh, render video ngắn,... trên các ứng dụng của nhà Adobe. Tích hợp thêm card Intel Iris Xe Graphics còn cho bạn chơi tốt được các tựa game thông dụng trên thị trường hiện nay như: Liên Quân Mobile, LOL,... \n

            • Trang bị RAM 16 GB mạnh mẽ cho phép bạn có thể vừa nghe nhạc trên YouTube vừa mở nhiều tab trên trình duyệt web mà khi sử dụng Photoshop vẫn mượt mà, ít bị giật lag. \n

            • Ổ cứng SSD 512 GB cho không gian lưu trữ lớn, hạn chế tình trạng phải dùng USB để lưu trữ dữ liệu. Nhờ ổ cứng có dung lượng lớn, thời gian truy xuất dữ liệu được nhanh hơn, quá trình mở máy cùng các ứng dụng cũng được rút ngắn. Laptop Asus còn hỗ trợ ổ cứng lên dung lượng 1 TB để có thể gia tăng không gian lưu trữ, giúp quá trình làm việc trở nên hiệu quả, năng suất hơn. \n

            • Màn hình 15.6 inch OLED cùng đạt chuẩn Display HDR True Black 600 cho phép hình ảnh xuất ra đạt chất lượng cao, màu sắc rực rỡ có độ tương phản cao. Thông số 100% DCI-P3 thích hợp cho những bạn có công việc liên quan đến đồ họa, xem phim, chỉnh sửa hình ảnh. \n

            • Ngoài ra, màn hình còn trang bị nhiều công nghệ bảo vệ mắt như: Low Blue Light giảm ánh sáng xanh, màn hình bảo vệ mắt - EYE CARE, độ sáng tối đa 600 nits cho bạn luôn cảm thấy thoải mái, không bị đau, mỏi mắt sau thời gian dài sử dụng laptop.\n

            • Sở hữu thiết kế đơn giản với tông bạc chủ đạo thích hợp cho những bạn yêu thích sự tối giản nhưng toát lên vẻ sang trọng. Tuy vỏ máy được làm từ nhựa nhưng lại đạt chuẩn quân đội MIL STD 810H, đem đến sự an toàn, chịu được va đập tốt nếu các bạn có vô tình làm rơi rớt. Laptop có khối lượng 1.7 kg và dày 19.9 mm nên khi cầm nắm vẫn cảm thấy thoải mái, dễ chịu.\n

            • Màn hình gập 180 độ không chỉ tăng thêm sự hiện đại, sang trọng mà còn tăng thêm năng suất công việc, cho bạn dễ dàng chia sẻ góc nhìn màn hình với mọi người xung quanh. Tăng thêm tính tiện lợi, hạn chế việc lộ thông tin ra ngoài với công tắc khóa camera cùng bảo mật vân tay, đem lại cảm giác an toàn cho người dùng khi sử dụng.

            • Đa dạng cổng kết nối cho phép quá trình truyền xuất dữ liệu nhanh chóng, dễ dàng: USB Type-C, USB 2.0, Jack tai nghe 3.5 mm, USB 3.2, HDMI.',
            'p_color' => '#F1F1F1',
            'p_type' => 'Laptop',
            'p_quantity' => 2,
            'p_photo1' => 'avatars/asus-vivobook-15-oled-1.jpg',
            'p_photo2' => 'avatars/asus-vivobook-15-oled-2.jpg',
            'p_photo3' => 'avatars/asus-vivobook-15-oled-3.jpg',
            'p_photo4' => 'avatars/asus-vivobook-15-oled-4.jpg',
            'p_photo5' => 'avatars/asus-vivobook-15-oled-5.jpg',
        ]);

        //5
        DB::table('products')->insert([
            'p_name' => 'Loa Bluetooth Monster Adventurer MAX',
            'cate_id' => 11,
            'p_price_old' => 4950000,
            'p_price_new' => 2790000,
            'p_description' => 'Loa Bluetooth Monster Adventurer MAX là một chiếc loa di động có kích thước lớn với công suất lên tới 60 W, được trang bị nhiều tính năng hiện đại và khả năng chống nước IPX7. Loa phù hợp với những người yêu thích âm nhạc, muốn có một trải nghiệm âm thanh chất lượng cao khi đi du lịch, dã ngoại hoặc tổ chức tiệc tùng.
            Thiết kế độc đáo, có thể di chuyển đến nhiều nơi
            Monster Adventurer MAX được làm từ chất liệu nhựa có khả năng chịu lực và chống va đập tốt. Mặt trước loa được trang bị lưới vừa bảo vệ các linh kiện bên trong vừa không cản trở âm thanh phát ra. Loa Bluetooth được trang bị tay cầm chắc chắn, khi mình cầm thì thấy bề mặt khá mịn, với khối lượng 2.25 kg thì việc di chuyển khá đơn giản.

            Loa Bluetooth Monster Adventurer MAX - Không quá nặng để di chuyển

            Phía trên loa được trang bị 5 phím nhấn với các chức năng sau: Bật/tắt loa, kết nối Bluetooth, giảm âm lượng, tăng âm lượng và dừng/phát nhạc. Ở nút bật/tắt loa và kết nối Bluetooth được trang bị đèn LED báo hiệu trạng thái hoạt động, tiện lợi trong quá trình sử dụng.

            Mặt sau của chiếc loa Monster này được tích hợp 5 cổng chức năng gồm: Jack cắm micro hỗ trợ khi hát karaoke, cổng AUX IN cho phép kết nối với các thiết bị khác, cổng sạc, cổng USB, khe gắn thẻ nhớ giúp phát nhạc trực tiếp từ thẻ nhớ SD và 1 nút reset. Các cổng và nút này được bảo vệ bởi một nắp đậy kín giúp hạn chế bụi xâm nhập.

            Loa Bluetooth Monster Adventurer MAX - Cổng kết nối

            Tận hưởng trọn vẹn từng giai điệu
            Loa Monster Adventurer MAX có âm thanh chất lượng cao, với âm trầm sâu và mạnh mẽ, âm trung rõ ràng và âm cao trong trẻo. Loa có thể tái tạo âm thanh của nhiều thể loại nhạc khác nhau, từ nhạc pop, rock, EDM đến nhạc cổ điển.

            Loa Bluetooth Monster Adventurer MAX là một chiếc loa di động mạnh mẽ với công suất 60 W, mang đến âm thanh sống động và đầy cảm xúc. Âm thanh 360 độ từ loa giúp các giai điệu được lan tỏa đều khắp không gian. Loa có thể phát âm thanh ở mức âm lượng lớn mà không bị méo tiếng, giúp mình thưởng thức âm nhạc một cách trọn vẹn.

            Loa Bluetooth Monster Adventurer MAX - Công suất 60 W

            Âm trầm của Monster Adventurer MAX có độ sâu, lực và độ chi tiết cao. Khi mình bật những bản nhạc có tiết tấu nhanh thì âm trầm của loa sẽ mang đến cảm giác mạnh mẽ, cuốn hút.

            Âm trung của loa cũng được tái tạo tốt, âm thanh rõ ràng, khi nghe các bản nhạc có giọng hát, âm trung của loa sẽ giúp giọng hát được thể hiện một cách chân thực, rõ từng nốt và thậm chí là từng cái lấy hơi của ca sĩ.

            Âm cao của loa Bluetooth Monster Adventurer MAX khá trong, mượt mà và không bị chói gắt. Khi nghe các bản nhạc sôi động âm cao của loa sẽ mang đến cảm giác tươi vui, rộn ràng. Loa còn có dải âm trường khá rộng, giúp âm thanh được lan tỏa đều khắp không gian, tạo cảm giác như âm thanh đang quay quanh mình.

            Loa Bluetooth Monster Adventurer MAX - Chất âm trong trẻo

            Bên cạnh đó, Monster Adventurer MAX cũng được trang bị bộ xử lý DSP, giúp tối ưu hóa chất lượng âm thanh, ngay cả khi mở nhạc với mức âm lượng nhỏ. Điều này giúp người dùng có thể tận hưởng trọn vẹn những bản nhạc yêu thích của mình, mà không muốn làm phiền những người xung quanh trong một không gian yên tĩnh.

            Chiếc loa Bluetooth đến từ nhà Monster này có thể kết nối với tối đa 2 loa cùng lúc thông qua tính năng Stereo Pair. Khi hai loa được kết nối với nhau, chúng sẽ hoạt động như một loa duy nhất, tạo ra âm thanh stereo mạnh mẽ và ấn tượng.',
            'p_color' => '#000',
            'p_type' => 'Loa',
            'p_quantity' => 4,
            'p_photo1' => 'avatars/loa-bluetooth-monster-adventurer-max-1-1.jpg',
            'p_photo2' => 'avatars/loa-bluetooth-monster-adventurer-max-2-1.jpg',
            'p_photo3' => 'avatars/loa-bluetooth-monster-adventurer-max-3-1.jpg',
            'p_photo4' => 'avatars/loa-bluetooth-monster-adventurer-max-4-1.jpg',
            'p_photo5' => 'avatars/loa-bluetooth-monster-adventurer-max-5-1.jpg',
        ]);

        //6
        DB::table('products')->insert([
            'p_name' => 'Màn hình MSI PRO MP243X 23.8 inch FHD/IPS/100Hz/4ms/HDMI',
            'cate_id' => 4,
            'p_price_old' => 2790000,
            'p_price_new' => 2190000,
            'p_description' => 'Màn hình MSI PRO MP243X 23.8 inch FHD sở hữu tần số quét 100 Hz, thời gian đáp ứng 4 ms mang đến cho bạn trải nghiệm hình ảnh tuyệt vời, cùng 119% sRGB và những thông số cao, hiện đại. Chiếc màn hình đồ họa này chắc chắn sẽ đáp ứng đầy đủ từ các nhu cầu làm việc, giải trí thường ngày đến chơi game hay làm việc đồ họa.
            • Màn hình máy tính MSI có kích thước 23.8 inch sử dụng tấm nền IPS cùng độ phân giải Full HD (1920 x 1080) mang đến không gian rộng rãi cùng chất lượng hình ảnh sắc nét để bạn thoải mái trải nghiệm các nội dung khác nhau. Hơn nữa, công nghệ chống chói Anti-Glare làm hạn chế tình trạng bóng gương, tăng cường khả năng quan sát của người dùng dưới điều kiện ánh sáng cao.

            • Với tần số quét 100 Hz và thời gian đáp ứng chỉ 4 ms, màn hình cung cấp hình ảnh mượt mà và không bị giật, giảm thiểu các tình trạng nhòa mờ, duy trì tốc độ chính xác cho các chuyển động, hỗ trợ tốt khi bạn trải nghiệm các bộ phim hành động hay các tựa game có tốc độ chuyển cảnh nhanh.

            • Đặc biệt, chiếc màn hình này còn có độ phủ màu đạt 119% sRGB đem đến khả năng tái tạo màu sắc chuẩn xác khi bạn làm việc đồ họa hay chỉnh sửa hình ảnh, video. MSI còn trang bị tính năng Eye Care, được thiết kế đặc biệt để bảo vệ sức khỏe của mắt bằng cách điều chỉnh tự động độ sáng và màu sắc để tối ưu hóa trải nghiệm xem mà không gây căng thẳng cho mắt khi sử dụng lâu.

            • Tính năng giảm ánh sáng xanh được tích hợp trên màn hình giúp giảm bớt ánh sáng xanh gây mỏi mắt và gây ảnh hưởng đến giấc ngủ. Kết hợp với tính năng Anti-Flicker cũng giúp giảm nhấp nháy không chỉ gây phiền hà khi xem, mà còn gây mệt mỏi và khó chịu cho mắt, từ đó đảm bảo bạn có một trải nghiệm xem mượt mà và không gây khó chịu cho mắt.

            • Màn hình máy tính được trang bị loa tích hợp để mang đến cho người dùng trải nghiệm âm thanh tốt nhất trong khi làm việc hoặc giải trí. Ngoài ra, với khả năng gắn ARM chuẩn VESA, bạn có thể dễ dàng thay đổi vị trí màn hình theo ý muốn, điều chỉnh độ cao, nghiêng, quay và xoay một cách linh hoạt.

            • MSI PRO MP243X được hoàn thiện với kiểu dáng tinh tế, hiện đại rất phù hợp để đặt trong phòng làm việc cá nhân, văn phòng hay các quầy lễ tân,... Khối lượng tổng thể 4.15 kg cũng không quá khó khăn khi di chuyển và lắp đặt.

            • Màn hình cũng có DisplayPort, HDMI, Headphone-out cho phép bạn kết nối nhanh chóng với các thiết bị như máy tính, loa và nhiều thiết bị khác. ',
            'p_color' => '#000',
            'p_type' => 'Man Hinh',
            'p_quantity' => 6,
            'p_photo1' => 'avatars/msi-pro-mp243x-23-8-inch-fhd-glr-1-1.jpg',
            'p_photo2' => 'avatars/msi-pro-mp243x-23-8-inch-fhd-glr-2-1.jpg',
            'p_photo3' => 'avatars/msi-pro-mp243x-23-8-inch-fhd-glr-3-1.jpg',
            'p_photo4' => 'avatars/msi-pro-mp243x-23-8-inch-fhd-glr-4-1.jpg',
            'p_photo5' => 'avatars/msi-pro-mp243x-23-8-inch-fhd-glr-5-1.jpg',
        ]);

        //7
        DB::table('products')->insert([
            'p_name' => 'Loa Bluetooth AVA+ Go Z09',
            'cate_id' => 11,
            'p_price_old' => 190000,
            'p_price_new' => 90000,
            'p_description' => 'Loa Bluetooth AVA+ Go Z09 là phiên bản loa giá rẻ nhưng có thiết kế ấn tượng với ngoại hình nhỏ gọn, đèn LED sống động, đi cùng các tiện ích hiện đại, phục vụ tốt nhu cầu giải trí cơ bản của người dùng.
            • Loa AVA+ có thiết kế gọn nhẹ từ nhựa cao cấp, khối lượng chỉ 0.165 kg dễ dàng bỏ vào balo, túi xách đồng hành cùng bạn mọi lúc mọi nơi.

            • Loa Bluetooth có chất lượng âm thanh sống động, chân thực, hỗ trợ kết nối 2 loa cùng lúc để tăng gấp đôi mức công suất.

            • Tích hợp đèn LED với màu sắc đa dạng, có thể dễ dàng tuỳ chỉnh mang đến không gian âm nhạc phong phú.

            • Công nghệ Bluetooth 5.3 hiện đại giúp kết nối thêm phần mượt mà, ổn định trong phạm vi từ 8 - 10 mét.

            • Hỗ trợ nhiều phím bấm trên loa giúp bạn dễ dàng điều khiển như: Chuyển bài hát, phát/dừng chơi nhạc, tăng/giảm âm lượng, thay đổi chế độ đèn, thay đổi chế độ kết nối.',
            'p_color' => '#fff',
            'p_type' => 'Loa',
            'p_quantity' => 6,
            'p_photo1' => 'avatars/loa-bluetooth-ava-go-z09-hc-1.jpg',
            'p_photo2' => 'avatars/loa-bluetooth-ava-go-z09-hc-2.jpg',
            'p_photo3' => 'avatars/loa-bluetooth-ava-go-z09-hc-3.jpg',
            'p_photo4' => 'avatars/loa-bluetooth-ava-go-z09-hc-4.jpg',
            'p_photo5' => 'avatars/loa-bluetooth-ava-go-z09-hc-5.jpg',
        ]);

        //8
        DB::table('products')->insert([
            'p_name' => 'Loa Bluetooth Monster Sparkle ',
            'cate_id' => 11,
            'p_price_old' => 2600000,
            'p_price_new' => 1990000,
            'p_description' => 'Loa Bluetooth Monster Sparkle với hệ thống đèn LED nổi bật cùng thiết kế thuôn dài đẹp mắt, công nghệ âm thanh sống động, tốc độ kết nối nhanh chóng, tiện lợi sử dụng trong những bữa tiệc cá nhân và các buổi tụ họp bạn bè hàng ngày.
            • Thiết kế gọn gàng, khối lượng khoảng 2.6 kg dễ dàng di chuyển khi cần, phù hợp với nhiều không gian nội thất trong nhà.

            • Cuốn hút trong từng điệu nhạc với mức công suất 30 W cùng công nghệ âm thanh độc quyền Monster Sound trên loa đem đến chất âm sống động, cảm giác như đang tận hưởng không gian giải trí tại rạp chiếu phim.

            • Dung lượng pin lớn, lưu trữ năng lượng cho cả ngày dài sử dụng, sạc 1 lần khoảng 4 tiếng là có ngay 12 giờ sử dụng liên tục (ở mức 50% âm lượng).

            • Loa Monster hỗ trợ công nghệ Bluetooth 5.3 cho tốc độ kết nối nhanh hơn, đường truyền ổn định và mượt mà, liền mạch trải nghiệm âm thanh của bạn.

            • Hiệu ứng đèn LED nhấp nháy nhiều màu sắc cùng khả năng chuyển nhịp theo tiếng nhạc cho người dùng mãn nhãn.',
            'p_color' => '#fff',
            'p_type' => 'Loa',
            'p_quantity' => 6,
            'p_photo1' => 'avatars/loa-bluetooth-monster-sparkle-1-1.jpg',
            'p_photo2' => 'avatars/loa-bluetooth-monster-sparkle-2-1.jpg',
            'p_photo3' => 'avatars/loa-bluetooth-monster-sparkle-3-1.jpg',
            'p_photo4' => 'avatars/loa-bluetooth-monster-sparkle-4-1.jpg',
            'p_photo5' => 'avatars/loa-bluetooth-monster-sparkle-5-1.jpg',
        ]);

        //9
        DB::table('products')->insert([
            'p_name' => 'Loa Bluetooth AVA+ Go Z12 ',
            'cate_id' => 11,
            'p_price_old' => 240000,
            'p_price_new' => 120000,
            'p_description' => 'Loa Bluetooth AVA+ Go Z12 sở hữu ngoại hình nhỏ gọn với đèn LED ấn tượng, công nghệ Bluetooth 5.3 hiện đại và khả năng kết nối cùng lúc 2 loa giúp không gian giải trí của bạn thêm phần sống động.
            • Loa Bluetooth được hoàn thiện từ chất liệu nhựa cao cấp, thiết kế nhỏ gọn giúp bạn dễ dàng mang theo mọi lúc mọi nơi.

            • Loa AVA+ có công suất 5 W, cho âm thanh rõ ràng và sống động trong không gian nhỏ như phòng ngủ, bàn làm việc hay nhu cầu sử dụng cá nhân.

            • Công nghệ Bluetooth 5.3 hiện đại giúp kết nối thêm phần nhanh chóng, giảm thiểu tối đa độ nhiễu, rè.

            • Cho phép bạn kết nối cùng lúc 2 loa nhằm khuếch đại âm thanh, cho không gian giải trí thêm phần thư giãn.

            • Hỗ trợ nhiều phím điều khiển giúp bạn dễ dàng thao tác như: Chuyển bài hát, phát/dừng chơi nhạc, tăng/giảm âm lượng, thay đổi chế độ đèn, thay đổi chế độ kết nối.',
            'p_color' => '#fff',
            'p_type' => 'Loa',
            'p_quantity' => 20,
            'p_photo1' => 'avatars/loa-bluetooth-ava-go-z12-hc-1.jpg',
            'p_photo2' => 'avatars/loa-bluetooth-ava-go-z12-hc-2.jpg',
            'p_photo3' => 'avatars/loa-bluetooth-ava-go-z12-hc-3.jpg',
            'p_photo4' => 'avatars/loa-bluetooth-ava-go-z12-hc-4.jpg',
            'p_photo5' => 'avatars/loa-bluetooth-ava-go-z12-hc-5.jpg',
        ]);

        //10
        DB::table('products')->insert([
            'p_name' => 'Laptop HP Pavilion 15 eg2081TU i5 1240P/16GB/512GB/Win11 (7C0Q4PA) ',
            'cate_id' => 2,
            'p_price_old' => 20990000,
            'p_price_new' => 18190000,
            'p_description' => 'Khả năng đáp ứng hiệu quả và mượt mà mọi tác vụ làm việc và giải trí nhờ sức mạnh của chip Intel Gen 12 cùng RAM 16 GB, laptop HP Pavilion 15 eg2081TU i5 1240P (7C0Q4PA) chắc chắn sẽ rất phù hợp với những bạn sinh viên, học sinh cũng như người đi làm.
            • Laptop sử dụng chip Intel Core i5 1240P có tốc độ ép xung cao 4.4 GHz kết hợp cùng card Intel Iris Xe Graphics cho hiệu năng vượt trội để thực hiện mượt mà mọi tác vụ soạn thảo văn bản và làm việc trên Word, Excel,... hay xem phim giải trí. Bạn còn có thể tạo ra các ấn phẩm 2D, chỉnh sửa video ngắn, hình ảnh cũng như chơi các tựa game thịnh hành nhờ khả năng xử lý đồ họa nâng cao đến từ GPU.

            • Bộ nhớ RAM 16 GB có hỗ trợ nâng cấp tối đa lên đến 32 GB cho người dùng khả năng đa nhiệm nhanh chóng, chuyển qua lại giữa các tab làm việc một cách trơn tru, vận hành nhiều tác vụ mà không bị đơ hay giật lag.

            • Laptop HP với ổ cứng SSD NVMe PCIe hỗ trợ truy xuất và khởi động các ứng dụng nhanh hơn đáng kể so với những ổ HDD thông thường, đồng thời dung lượng 512 GB cũng mang đến không gian lưu trữ thoải mái cho tệp tin và tài liệu của bạn.

            • Màn hình kích thước 15.6 inch có công nghệ BrightView cùng độ phân giải Full HD (1920 x 1080) đem lại không gian trải nghiệm nội dung bao quát, khung hình rõ nét cùng màu sắc tươi tắn cho những trải nghiệm xem phim hay làm việc của bạn.

            • Công nghệ Realtek High Definition Audio mang đến chất âm sống động và được khuếch đại với tần số cao, đắm chìm bạn vào những trải nghiệm phim ảnh, âm nhạc tuyệt vời.

            • Máy được thiết kế với kiểu dáng thanh lịch và tinh tế, vỏ máy bằng nhựa và chiếu nghỉ tay được chế tác với kim loại cũng mang đến tính bền bỉ, chắc chắn nhất định trong quá trình sử dụng. Ngoài ra, khối lượng tổng thể 1.72 kg vẫn rất dễ dàng cho người dùng có thể mang theo laptop mọi lúc, mọi nơi.

            • Chiếc laptop học tập - văn phòng này còn có HD Webcam giúp người dùng có thể nhanh chóng tham gia các hoạt động trực tuyến mà không phải kết nối thêm với thiết bị bên ngoài.

            • Laptop HP Pavilion với nhiều cổng giao tiếp như: HDMI, Jack tai nghe 3.5 mm, USB 3.2 và USB Type-C giúp kết nối thuận lợi với các thiết bị ngoại vi.',
            'p_color' => '#e6e6e6',
            'p_type' => 'Laptop',
            'p_quantity' => 15,
            'p_photo1' => 'avatars/hp-pavilion-15-eg2081tu-i5-7c0q4pa-1.jpg',
            'p_photo2' => 'avatars/hp-pavilion-15-eg2081tu-i5-7c0q4pa-2.jpg',
            'p_photo3' => 'avatars/hp-pavilion-15-eg2081tu-i5-7c0q4pa-3.jpg',
            'p_photo4' => 'avatars/hp-pavilion-15-eg2081tu-i5-7c0q4pa-4.jpg',
            'p_photo5' => 'avatars/hp-pavilion-15-eg2081tu-i5-7c0q4pa-5.jpg',
        ]);

        //11
        DB::table('products')->insert([
            'p_name' => 'Laptop Asus TUF Gaming A15 FA506NF R5 7535HS/16GB/512GB/4GB RTX2050/144Hz/Win11 (HN012W)',
            'cate_id' => 2,
            'p_price_old' => 20990000,
            'p_price_new' => 17490000,
            'p_description' => 'Một mẫu laptop chiến game đến từ thương hiệu Asus vừa được lên kệ tại Thế Giới Di Động, sở hữu những thông số cấu hình vượt trội với AMD Ryzen 5 dòng HS mạnh mẽ, card rời RTX 2050 và có một mức giá cân đối. Laptop Asus TUF Gaming A15 FA506NF R5 7535HS (HN012W) chắc chắn sẽ là công cụ tuyệt vời để thoả mãn mọi nhu cầu giải trí của anh em.
            • Bộ vi xử lý AMD Ryzen 5 7535HS cùng card đồ họa rời NVIDIA GeForce RTX 2050 4 GB cung cấp một hiệu năng xử lý mạnh mẽ, thừa sức để chỉnh sửa hình ảnh, render video chuyên nghiệp trên Photoshop, AI,... đồng thời chiến các tựa game hot ở mức cấu hình Medium đến High.

            • Laptop Asus với bộ nhớ RAM 16 GB chuẩn DDR5 cho phép người dùng đa nhiệm trơn tru, chạy các trò chơi hay phần mềm đồ họa nặng mà không gặp hiện tượng giật lag. Máy có khả năng nâng cấp RAM lên đến 32 GB, giúp cho hệ thống nâng cao hiệu suất, đáp ứng mượt mà cho nhu cầu sử dụng cao hơn.

            • Ổ cứng SSD 512 GB NVMe PCIe 4.0 không chỉ có tốc độ truy xuất dữ liệu cao, giúp tối ưu khởi động máy mà còn cho phép người dùng lưu trữ nhiều ứng dụng, dữ liệu và trò chơi.

            • Màn hình laptop 15.6 inch được phủ tấm nền IPS độ phân giải Full HD (1920 x 1080) có khả năng tái tạo màu tốt, hình ảnh hiển thị sắc nét cùng góc nhìn bao quát và đều màu lên đến 178 độ. Công nghệ Anti Glare hỗ trợ chống chói, lóa mờ trên màn hình khi bạn sử dụng ở nơi có cường độ ánh sáng mạnh.

            • Tần số quét 144 Hz tích hợp công nghệ làm mới Adaptive-Sync giúp loại bỏ những vấn đề như giật, xé ảnh cũng như có độ trễ hình thấp mang lại cho bạn trải nghiệm giải trí tuyệt vời, thích hợp với những game có tiết tấu và tốc độ chuyển cảnh nhanh.

            • Một số những thông số về màu sắc cơ bản như 62.5% sRGB, 47.34% Adobe RGB và 45% NTSC cũng đáp ứng được những điều kiện tối thiểu về màu sắc, để bạn có thể thoải mái tinh chỉnh đồ hoạ một cách bán chuyên.

            • Hệ thống loa đạt chuẩn Hi-Res có khả năng tái tạo chất âm 3D từ nhiều hướng nhờ tích hợp với công nghệ DTS Audio cung cấp chất âm sống động, tách biệt rõ từng sắc âm trầm bổng, hỗ trợ bạn cảm nhận rõ hơn từng giai điệu bài hát, những thước phim hay những trận game kịch tính.

            • Laptop Asus TUF Gaming được chế tác với vỏ nhựa, nắp lưng kim loại cứng cáp, mang những đường nét tinh tế, sẽ thu hút mọi ánh nhìn khi sử dụng máy ở những nơi đông người. Hơn nữa, laptop gaming có đèn chuyển màu RGB - 1 vùng, định hình cá tính với đa màu sắc, vừa dễ dàng sử dụng khi thiếu sáng, vừa mang đến sự hứng khởi khi sử dụng.

            • Hệ thống tản nhiệt thông dụng với quạt Arc Flow 84 cánh, đảm bảo được lượng nhiệt ở mức ổn định kể cả khi bạn thực hiện những công việc hiệu suất cao như stream game hay làm đồ hoạ, không bị nâng hay tụt hiệu năng trong quá trình sử dụng.

            • Laptop gaming có đầy đủ các cổng giao tiếp đáp ứng mọi nhu cầu kết nối: HDMI, Jack 3.5 mm, USB 3.2, USB Type-C,...',
            'p_color' => '#000',
            'p_type' => 'Laptop',
            'p_quantity' => 15,
            'p_photo1' => 'avatars/asus-tuf-gaming-a15-fa506nf-r5-hn012w-glr-2.jpg',
            'p_photo2' => 'avatars/asus-tuf-gaming-a15-fa506nf-r5-hn012w-glr-1.jpg',
            'p_photo3' => 'avatars/asus-tuf-gaming-a15-fa506nf-r5-hn012w-glr-3.jpg',
            'p_photo4' => 'avatars/asus-tuf-gaming-a15-fa506nf-r5-hn012w-glr-4.jpg',
            'p_photo5' => 'avatars/asus-tuf-gaming-a15-fa506nf-r5-hn012w-glr-5.jpg',
        ]);

        //12
        DB::table('products')->insert([
            'p_name' => 'Đồng hồ thông minh BeFit WatchFit 46.7mm',
            'cate_id' => 7,
            'p_price_old' => 890000,
            'p_price_new' => 490000,
            'p_description' => 'BeFit WatchFit được trang bị các chức năng sức khỏe và thể thao cơ bản, đáp ứng được nhu cầu sử dụng của người dùng phổ thông. Tuy thuộc phân khúc giá rẻ nhưng chiếc đồng hồ thông minh này vẫn được trang bị tính năng nghe gọi, đảm bảo sự thuận tiện trong quá trình sử dụng.
            Phong cách hiện đại, kiểu dáng nhỏ gọn
            Về mặt thiết kế BeFit WatchFit sẽ có vài điểm khác biệt so với những mẫu smartwatch cùng hãng. Sở hữu mặt đồng hồ hình chữ nhật có kích thước 46.7 mm, các góc được bo cong mềm mại nên đối với những ai có cổ tay nhỏ như mình khi đeo cũng không bị thô. Bên cạnh phải của mặt đồng hồ có một nút bấm, khi mình thao tác thì thấy độ nảy khá tốt.

            BeFit WatchFit - Kiểu dáng hiện đại

            Tuy nhiên, có một điểm mình chưa ưng lắm ở chiếc đồng hồ thông minh này là phần viền khá dày ở cả 4 cạnh. Dù vậy thì mình vẫn có thể sử dụng những tấm ảnh nền đen để tạo cảm giác liền mạch giữa màn hình và viền, tăng tính thẩm mỹ khi nhìn vào.

            Đồng hồ được trang bị dây silicone vô cùng mềm mịn, dù mình đeo trên tay cả ngày dài cũng không bị hằn hay ngứa, rất thích hợp với những ai thường ra nhiều mồ hôi. Khối lượng của đồng hồ chỉ 35.5 g, theo cảm nhận của mình là khá nhẹ nên những lúc mình nhảy dây cũng không cảm thấy mỏi tay.

            BeFit WatchFit - Gọn nhẹ theo cổ tay

            Đồng hồ thông minh được trang bị màn hình cảm ứng thuận tiện trong các thao tác điều khiển. Kích thước 1.57 inch tuy không quá lớn nhưng vẫn đủ để hiển thị. Màn hình có độ phân giải 200 x 320 Pixels mang đến những nội dung rõ nét, tấm nền IPS cho màu sắc chân thật và góc nhìn rộng. Những lúc mình sử dụng ở ngoài trời thì màn hình sẽ có bóng gương nhẹ nhưng nội dung hiển thị khá tốt.

            BeFit WatchFit - Hiển thị nội dung rõ nét

            BeFit WatchFit không có tính năng màn hình luôn hiển thị (Always on Display) nhưng được trang bị tính năng nâng cổ tay sáng màn hình cũng rất tiện lợi khi dùng và tiết kiệm năng lượng. Trong quá trình mình sử dụng thì chưa thấy tình trạng bị trễ khi nâng cổ tay lên để xem giờ.

            BeFit WatchFit - Màn hình luôn hiển thị (Always On Display)

            Hỗ trợ chăm sóc sức khỏe tốt hơn
            Đồng hồ thông minh BeFit được trang bị cảm biến đo nhịp tim với tốc độ nhanh chóng, tương đối chính xác. Đồng thời, thiết bị còn được hỗ trợ một số chức năng sức khỏe thông dụng như: Đo huyết áp, theo dõi giấc ngủ, đo nồng độ oxy trong máu (SpO2),... giúp người dùng theo dõi sự thay đổi của cơ thể một cách tốt hơn.

            BeFit WatchFit - Đa dạng chức năng sức khỏe

            Mình đã trải nghiệm tính năng theo dõi giấc ngủ trên đồng hồ rất nhiều lần và kết quả nhận được so với thực tế thì có độ chính xác cao. Đồng hồ đo được thời gian đi ngủ, thời gian thức dậy, giai đoạn ngủ sâu và ngủ nông giúp mình hiểu rõ hơn về tình trạng giấc ngủ từ đó tiến hành điều chỉnh cho phù hợp hơn.

            BeFit WatchFit - Theo dõi giấc ngủ

            Bên cạnh đó, mình cũng đã tiến hành đo SpO2 và nhịp tim bằng BeFit WatchFit và so sánh với máy đo y tế cầm tay. Kết quả giữa hai thiết bị có sai số nhưng không quá lớn, nên mình vẫn có thể tham khảo những chỉ số này để thiết lập chế độ ăn uống, nghỉ ngơi cho phù hợp với cơ thể.

            BeFit WatchFit - Đo nhịp tim và SpO2

            Tính năng đếm bước chân trên thiết bị này mình cũng đã trải nghiệm, về độ chính xác thì chỉ ở mức tương đối. Mình đã bật chế độ đi bộ để đếm bước chân và đi được 100 bước nhưng đồng hồ chỉ ghi nhận được 85 bước. Lúc mình chạy xe máy cũng có thử bật đếm bước chân, sau khoảng 6 km mình có dừng lại kiểm tra thì thấy đồng hồ đã ghi nhận 12 bước chân. Có thể thấy tính năng này hoạt động chưa thật sự ổn định.

            BeFit WatchFit - Tính năng đếm bước chân

            Đồng hồ thông minh BeFit được trang bị những môn thể thao cơ bản như: Đi bộ, bóng rổ, cầu lông, chạy bộ, leo núi, đạp xe, bóng đá,... đáp ứng nhu cầu rèn luyện cơ bản của mọi người, cho người dùng thoải mái lựa chọn dựa vào sở thích và mục đích tập luyện. Khi mình tập luyện đồng hồ sẽ đo lường các chỉ số cơ thể, kết quả của buổi tập để thuận tiện cho việc đánh giá và đưa ra kế hoạch rèn luyện thích hợp.

            BeFit WatchFit - Đa dạng chế độ thể thao

            Có thể nhận cuộc gọi ngay trên đồng hồ
            Trước tiên mình cần tải ứng dụng FitCloudPro để đồng bộ dữ liệu giữa điện thoại và đồng hồ. Theo như trải nghiệm của mình thì khả năng liên kết của hai thiết bị khá tốt, tin nhắn, thông báo và cuộc gọi được hiển thị một cách nhanh chóng.

            Tải ứng dụng FitCloudPro tại: CH Play | App Store

            Khi kết nối với điện thoại iOS những cuộc gọi thông thường hay từ ứng dụng mình đều có thể nhận hoặc từ chối bằng đồng hồ. Tuy nhiên, phần tên liên hệ sẽ không được hiển thị dù mình đã lưu trong danh bạ.

            BeFit WatchFit - Cuộc gọi khi kết nối iOS

            Còn khi liên kết với điện thoại Android những cuộc gọi quay số thông thường mình có thể nhận hoặc từ chối trực tiếp trên đồng hồ. Đối với những cuộc gọi từ ứng dụng như: Zalo, Line, Messenger,... thì đồng hồ chỉ có thể từ chối chứ không nhận được.

            ',
            'p_color' => '#000',
            'p_type' => 'Dong Ho',
            'p_quantity' => 15,
            'p_photo1' => 'avatars/befit-watch-fit-hong-1-2.jpg',
            'p_photo2' => 'avatars/befit-watch-fit-hong-2-2.jpg',
            'p_photo3' => 'avatars/befit-watch-fit-hong-3-2.jpg',
            'p_photo4' => 'avatars/befit-watch-fit-hong-4.jpg',
            'p_photo5' => 'avatars/befit-watch-fit-hong-5.jpg',
        ]);

        //13
        DB::table('products')->insert([
            'p_name' => 'Đồng hồ Casio 34 mm Nam MTP-M305D-1AVDF ',
            'cate_id' => 7,
            'p_price_old' => 3767000,
            'p_price_new' => 2636000,
            'p_description' => '• Đồng hồ Casio 34 mm Nam MTP-M305D-1AVDF là một sản phẩm đáng chú ý từ thương hiệu nổi tiếng Casio của Nhật Bản. Với điểm nhấn là hình ảnh mặt trăng tinh xảo được chế tác tại vị trí 6 giờ, sản phẩm mang đến vẻ đẹp cảm hứng và tinh tế. Đây không chỉ là một phụ kiện hoàn hảo cho công việc và vui chơi, mà còn thể hiện sự thanh lịch hiện đại cho các quý ông.

            • Đồng hồ Casio này có thiết kế hiện đại hơn, khác biệt với mặt số hình chữ nhật ấn tượng, giúp giảm đi sự thường thấy của mặt tròn và thêm phần thanh lịch và sang trọng khi đeo. Điều này đem lại sự mới mẻ cho những quý ông muốn thử điểm mới cho phong cách của mình.

            • Chất liệu dây đeo và khung viền của sản phẩm này được làm từ thép không gỉ cứng cáp, bền bỉ với thời gian. Chất liệu này giúp đồng hồ dễ dàng lau chùi, luôn giữ được vẻ sáng bóng giúp bạn nam có thể đeo thường xuyên.

            • Đồng hồ nam này có kích thước phù hợp với cổ tay mảnh khảnh, đường kính 34 mm. Mặt kính của sản phẩm được làm bằng kính khoáng (Mineral) với độ cứng và khả năng chống va đập tốt, cho phép quan sát mặt đồng hồ dễ dàng.

            • Đồng hồ này còn có khả năng chống nước đến độ sâu 5 ATM, phù hợp với các hoạt động hàng ngày như đi mưa, rửa tay hay đi tắm, nhưng không nên sử dụng khi bơi.

            • Đặc biệt, đồng hồ nam này trang bị tính năng hiển thị lịch thứ và lịch ngày trên mặt số, tính năng lịch tuần trăng giúp bạn dễ dàng theo dõi thời gian. Nhờ tính năng này, đồng hồ không chỉ là một phụ kiện thời trang mà còn hữu ích trong việc quản lý thời gian và lịch trình.',
            'p_color' => 'e6e6e6e6',
            'p_type' => 'Dong Ho',
            'p_quantity' => 10,
            'p_photo1' => 'avatars/casio-mtp-m305d-1avdf-nam-1.jpg',
            'p_photo2' => 'avatars/casio-mtp-m305d-1avdf-nam-2.jpg',
            'p_photo3' => 'avatars/casio-mtp-m305d-1avdf-nam-3.jpg',
            'p_photo4' => 'avatars/casio-mtp-m305d-1avdf-nam-4.jpg',
            'p_photo5' => 'avatars/casio-mtp-m305d-1avdf-nam-5.jpg',
        ]);

        //14
        DB::table('products')->insert([
            'p_name' => 'Đồng hồ Citizen Sunshine and Luna 40 mm Nam NH9130-84L',
            'cate_id' => 7,
            'p_price_old' => 10085000,
            'p_price_new' => 8068000,
            'p_description' => '• Đồng hồ Citizen - một hãng đồng hồ nổi tiếng từ Nhật Bản không chỉ là một biểu tượng thời gian, mà sản phẩm ở đây còn là biểu tượng của sự tinh tế, đẳng cấp và sự chăm sóc tỉ mỉ trong từng chi tiết, là người bạn đồng hành đáng tin cậy trong cuộc sống hàng ngày của người tiêu dùng.

            • Đồng hồ Citizen Sunshine and Luna 40 mm Nam NH9130-84L được đánh giá cao nhờ thiết kế lộ tim tinh tế và độc đáo ở vị trí 6 giờ, tạo nên sự thu hút. Phần lộ tim được trang trí bằng họa tiết đường vân, tạo cảm giác như những tia sáng mặt trời, mang ý nghĩa về năng lượng tích cực và lạc quan. Khi được ánh sáng chiếu vào các vân họa tiết được lộ rõ hơn đúng với tinh thần của bộ sưu tập Sunshine and Luna (mặt trăng, mặt trời) mang lại.

            • Đồng hồ nam này có đường kính 40 mm phù hợp với các bạn nam có cổ tay trung bình. Các chàng trai có thể đeo sản phẩm thường xuyên mà không cần phải lo lắng về những trầy xước thông thường vì mặt kính của chiếc đồng hồ này được làm từ kính Sapphire.

            • Người dùng có thể yên tâm đeo mẫu đồng hồ trong các sinh hoạt hằng ngày như rửa tay, đi mưa hay đi tắm nhờ hệ số kháng nước lên đến 5 ATM. Lưu ý: không đeo khi đi bơi hay lặn.

            • Khung viền được chế tạo từ thép không gỉ sáng bóng cùng khả năng chống chịu va đập cũng như hạn chế ăn mòn khá tốt giúp người dùng có thể yên tâm khi sử dụng. Đặc biệt, dây đeo của sản phẩm được sử dụng chất liệu là thép không gỉ 316L giúp tăng độ bóng bẩy và độ bền lên 2 đến 3 lần so với các mẫu đồng hồ thông thường.',
            'p_color' => 'e6e6e6e6',
            'p_type' => 'Dong Ho',
            'p_quantity' => 10,
            'p_photo1' => 'avatars/dong-ho-citizen-40-mm-nam-nh9130-84l-1.jpg',
            'p_photo2' => 'avatars/dong-ho-citizen-40-mm-nam-nh9130-84l-2.jpg',
            'p_photo3' => 'avatars/dong-ho-citizen-40-mm-nam-nh9130-84l-3.jpg',
            'p_photo4' => 'avatars/dong-ho-citizen-40-mm-nam-nh9130-84l-4.jpg',
            'p_photo5' => 'avatars/dong-ho-citizen-40-mm-nam-nh9130-84l-5.jpg',
        ]);

        //14
        DB::table('products')->insert([
            'p_name' => 'Smart Tivi Samsung 4K 65 inch UA65AU7002',
            'cate_id' => 9,
            'p_price_old' => 13900000,
            'p_price_new' => 10990000,
            'p_description' => 'Smart Tivi Samsung 4K 65 inch UA65AU7002 mang đến trải nghiệm xem ấn tượng với màn hình 65 inch, tái tạo hình ảnh 4K chân thực cùng độ phân giải 4K, bộ xử lý Crystal 4K, màu sắc rực rỡ với công nghệ PurColor, âm thanh mạnh mẽ, sống động với công nghệ Q-Symphony, Adaptive Sound, hệ điều hành Tizen™ với kho ứng dụng phong phú, dễ sử dụng.

            Tổng quan thiết kế
            - Smart Tivi Samsung 4K 65 inch UA65AU7002 tỏa sáng trong mọi căn phòng với thiết kế màn hình phẳng tinh giản, sang trọng, giúp tôn lên gu thẩm mỹ đẳng cấp của mọi gia chủ.

            - Kích thước màn hình 65 inch, lý tưởng để bố trí trong các căn phòng khách, phòng ngủ, văn phòng làm việc có diện tích vừa và lớn.

            - Có chân đế dạng chữ V úp ngược nâng tivi Samsung vững vàng khi lắp đặt kiểu để bàn. Nếu muốn tăng không gian trống trong phòng, bạn có thể loại bỏ chân đế và lắp kiểu treo tường.

            Smart Tivi Samsung 4K 65 inch UA65AU7002 - Tổng quan thiết kế

            *Hình ảnh chỉ mang tính chất minh họa sản phẩm

            Công nghệ hình ảnh
            - Độ phân giải 4K với 3.840 x 2.160 điểm ảnh cho hình ảnh rõ nét gấp 4 lần độ phân giải Full HD.

            - Bộ xử lý Crystal 4K có khả năng điều chỉnh màu sắc, tối ưu tỷ lệ tương phản và dải màu động một cách tự động để hình ảnh hiển thị đẹp mắt, sắc nét.

            - Công nghệ HDR10+ cải tiến độ sáng hiển thị khung hình chi tiết, có chiều sâu trong khi không làm thay đổi các đặc tính gốc của hình.

            - PurColor với hệ màu mở rộng mang đến các thước phim với màu sắc rực rỡ, sinh động, xem nịnh mắt.

            - Công nghệ Contrast Enhancer tăng độ tương phản, bao phủ lên màn hình nhiều lớp sáng tối cho mỗi vật thể, khu vực trong hình ảnh đều trở nên chân thực, chi tiết.

            - Motion Xcelerator tự động thêm khung hình vào nội dung ban đầu để các hành động trở nên rõ ràng, game thủ chơi game mượt mà, tận hưởng giải trí với các tựa game yêu thích thỏa mãn hơn.

            Mời bạn xem thêm: Những độ phân giải màn hình phổ biến hiện nay trên tivi

            Smart Tivi Samsung 4K 65 inch UA65AU7002 - Công nghệ hình ảnh

            *Hình ảnh chỉ mang tính chất minh họa sản phẩm

            Công nghệ âm thanh
            - Công nghệ Adaptive Sound tối ưu âm thanh theo từng thể loại nội dung mà tivi đang phát, theo môi trường bạn đang xem để người nghe được trải nghiệm chất lượng âm thanh tốt nhất.

            - Công nghệ Q-Symphony liên kết loa của Smart tivi với loa thanh kiến tạo không gian giải trí bùng nổ với âm thanh vang dội, sinh động.

            Smart Tivi Samsung 4K 65 inch UA65AU7002 - Công nghệ âm thanh

            *Hình ảnh chỉ mang tính chất minh họa sản phẩm

            Hệ điều hành
            - Smart tivi Samsung thiết lập hệ điều hành Tizen™ có giao diện màn hình chính trực quan, bạn dễ dàng tìm kiếm, tùy chọn các chức năng, ứng dụng phù hợp với nhu cầu của mình.

            - Có nhiều ứng dụng phổ biến như YouTube, FPT Play, Galaxy Play (Fim+), Clip TV, Netflix, MyTV, POPS Kids, Spotify,... bạn còn có thể tải thêm nhiều ứng dụng hữu ích khác cho mình trong kho ứng dụng phong phú của hệ điều hành.',
            'p_color' => '#000',
            'p_type' => 'Television',
            'p_quantity' => 5,
            'p_photo1' => 'avatars/untitled-1.jpg',
            'p_photo2' => 'avatars/untitled-2.jpg',
            'p_photo3' => 'avatars/untitled-3.jpg',
            'p_photo4' => 'avatars/untitled-4.jpg',
            'p_photo5' => 'avatars/untitled-5.jpg',
        ]);


        //15
        DB::table('products')->insert([
            'p_name' => 'Smart Tivi Toshiba 4K 55 inch 55E330MP',
            'cate_id' => 9,
            'p_price_old' => 11990000,
            'p_price_new' => 9490000,
            'p_description' => 'Smart Tivi Toshiba 4K 55 inch 55E330MP thiết kế tối giản, sang trọng với màn hình 55 inch, bộ xử lý Regza Engine ZR tối ưu chất lượng hình ảnh, công nghệ Ultra Essential PQ tái tạo khung hình chân thật, công nghệ Dolby Vision IQ đảm bảo cảnh quay hiển thị đúng như ý tưởng của nhà làm phim, công nghệ Dolby Atmos đem đến âm thanh vòm sống động như ở rạp hát, tìm kiếm bằng giọng nói qua ứng dụng VIDAA dễ dàng.

            Tổng quan thiết kế
            - Toshiba 55E330MP với đường nét tinh tế, đường viền mỏng ôm trọn các cạnh của màn hình 55 inch, hòa nhập vào không gian nội thất hiện đại của căn phòng khách, phòng ngủ, phòng họp có diện tích vừa và rộng của gia đình, công ty.

            - Chất liệu kim loại mang đến độ bền chắc cao cho chân đế chữ V úp ngược giúp bạn yên tâm lắp đặt tivi kiểu để bàn, không sợ thiết bị nghiêng, đổ. Nếu tháo chân đế ra, người dùng có thể bố trí kiểu treo tường cho không gian phòng thêm rộng thoáng hơn.

            Smart Tivi Toshiba 4K 55 inch 55E330MP - Tổng quan thiết kế

            *Hình ảnh chỉ mang tính chất minh hoạ

            Công nghệ hình ảnh
            - Màn hình độ phân giải 4K tái hiện hình ảnh sắc nét gấp 4 lần so với Full HD.

            - Bộ xử lý Regza Engine ZR cho hiệu quả xử lý tối ưu mang đến khung hình có chất lượng cao. Công nghệ AI 4K Upscaling chọn lọc các màu sắc của những điểm ảnh ở lân cận, sử dụng thuật toán phân tích kết cấu của nội dung gốc, nâng cấp hình ảnh nguồn vào từ Full HD lên gần chuẩn 4K sống động.

            - Công nghệ Ultra Essential PQ phân tích mỗi điểm ảnh trên từng khung hình từ đó điều chỉnh một cách tự động, tìm ra các chi tiết điểm ảnh tối ưu, tái tạo, nâng cấp để khung hình có chất lượng tuyệt vời.

            Mời bạn xem thêm: Những độ phân giải màn hình phổ biến hiện nay trên tivi

            Smart Tivi Toshiba 4K 55 inch 55E330MP - Công nghệ Ultra Essential PQ

            *Hình ảnh chỉ mang tính chất minh hoạ

            - Dolby Vision IQ tinh chỉnh hình ảnh dựa vào các cấp độ ánh sáng trong môi trường xung quanh sao cho hình ảnh được truyền tải theo như ý tưởng của nhà sáng tạo nội dung mong muốn.

            - Công nghệ AI Picture Optimizer với trí tuệ nhân tạo Al, tivi sẽ phân tích, tinh chỉnh khung hình chính xác, chọn ra chế độ xem thích hợp cho từng nội dung để hiển thị màu sắc, chất lượng hình ảnh tương thích với từng khung hình.

            - Color Re-Master, công nghệ phục hồi màu sắc vốn có của hình ảnh gốc đầy đủ để tạo nên các cảnh quay có màu sắc tự nhiên, đẹp như bước ra từ đời thực.

            Smart Tivi Toshiba 4K 55 inch 55E330MP - Color Re-Master

            *Hình ảnh chỉ mang tính chất minh hoạ

            - Công nghệ Auto Clean tự động phân tích chuyển động, độ sáng, loại bỏ hiệu ứng nhiễu để thước phim hiển thị rõ ràng, sáng đẹp hơn.

            - Các công nghệ Super Contrast Booster, HDR10+, HLG nâng cao độ tương phản, độ sáng, tăng độ sâu cho từng khung hình thêm chi tiết, chân thật.

            - Mẫu Smart tivi này hỗ trợ đồng bộ khung hình/tần số quét chơi game VRR, có tính năng giảm nhiễu đầu vào Auto Low Latency Mode (ALLM) cho bạn chiến game mượt mà, phản hồi tức thì, giành chiến thắng trong tầm tay. ',
            'p_color' => '#000',
            'p_type' => 'Television',
            'p_quantity' => 5,
            'p_photo1' => 'avatars/smart-tivi-toshiba-4k-55-inch-55e330mp-01.jpg',
            'p_photo2' => 'avatars/smart-tivi-toshiba-4k-55-inch-55e330mp-02.jpg',
            'p_photo3' => 'avatars/smart-tivi-toshiba-4k-55-inch-55e330mp-03.jpg',
            'p_photo4' => 'avatars/smart-tivi-toshiba-4k-55-inch-55e330mp-04.jpg',
            'p_photo5' => 'avatars/smart-tivi-toshiba-4k-55-inch-55e330mp-05.jpg',
        ]);

        //16
        DB::table('products')->insert([
            'p_name' => 'Smart Tivi Toshiba 4K 55 inch 55E330MP',
            'cate_id' => 9,
            'p_price_old' => 19900000,
            'p_price_new' => 12490000,
            'p_description' => 'Smart Tivi LG 4K 55 inch 55UQ8000PSC tinh giản trong thiết kế thanh mảnh, sang đẹp, mang khung hình 4K rực rỡ, tương phản cao ấn tượng hòa mình vào không gian nội thất hiện đại, cùng chất âm sống động tinh chỉnh qua AI Sound và AI Acoustic Tuning cho người dùng trải nghiệm đầy lý thú trên từng ứng dụng giải trí từ webOS 22.

            Tổng quan thiết kế
            - Smart Tivi LG 4K 55 inch 55UQ8000PSC sở hữu kích thước màn hình 55 inch thích hợp dùng cho các phòng có diện tích trung bình như phòng khách gia đình, phòng họp, sảnh nhỏ,...

            - Thiết kế tinh tế, thanh mảnh với các cạnh viền siêu mỏng, tinh giản mà sang trọng, phá vỡ giới hạn tầm nhìn trên khung hình trình chiếu.

            - Tivi có chân đế bằng nhựa lõi kim loại đảm bảo độ bền chắc để nâng đỡ tốt màn hình khi lắp đặt trên kệ tủ, dễ dàng tháo rời chân để bố trí treo tường tiết kiệm không gian.

            Smart Tivi LG 4K 55 inch 55UQ8000PSC - Thiết kế

            *Hình ảnh chỉ mang tính chất minh họa sản phẩm

            Công nghệ hình ảnh
            - Chất lượng hiển thị sắc nét ấn tượng với độ phân giải 4K (3.840 x 2.160).

            - Bộ xử lý α5 Gen5 AI 4K tối ưu hình ảnh và màu sắc chuẩn xác, chân thực, cùng với khả năng nâng cấp nội dung đầu vào lên chuẩn gần 4K từ công nghệ 4K AI Upscaling cho người xem thưởng thức những khung hình hoàn hảo về độ sắc nét chi tiết.

            - Chất lượng tương phản cũng được gia tăng nhờ công nghệ HDR10 Pro và HDR Dynamic Tone Mapping, độ sáng và độ rõ nét được tối ưu, màn hình xem trở nên rực rỡ hơn, các chi tiết ẩn rõ ràng hơn, đưa người xem hòa mình vào khung cảnh và nội dung đang chiếu.

            - Màn hình game mượt mà nhờ chế độ game HGIG và phản hồi tức thì với công nghệ giảm độ trễ Auto Low Latency Mode (ALLM).

            - Trải nghiệm phim điện ảnh theo đúng mong muốn từ nhà làm phim nhờ chế độ FilmMaker Mode. ',
            'p_color' => '#000',
            'p_type' => 'Television',
            'p_quantity' => 2,
            'p_photo1' => 'avatars/smart-lg-4k-55-inch-55uq8000psc-01.jpg',
            'p_photo2' => 'avatars/smart-lg-4k-55-inch-55uq8000psc-02.jpg',
            'p_photo3' => 'avatars/smart-lg-4k-55-inch-55uq8000psc-03.jpg',
            'p_photo4' => 'avatars/smart-lg-4k-55-inch-55uq8000psc-04.jpg',
            'p_photo5' => 'avatars/smart-lg-4k-55-inch-55uq8000psc-05.jpg',
        ]);

        //17
        DB::table('products')->insert([
            'p_name' => 'Bàn Phím Không Dây DareU EK807G ',
            'cate_id' => 10,
            'p_price_old' => 670000,
            'p_price_new' => 510000,
            'p_description' => 'Bàn Phím Không Dây DareU EK807G có khối lượng nhẹ với kích thước gọn gàng, thiết kế không dây cho phép dùng linh hoạt, để bạn tùy chọn vị trí sử dụng phù hợp nhất cho riêng mình.
            • Bàn phím không dây gây ấn tượng mạnh với màu đen đẹp mắt, thiết kế tuân thủ chuẩn công thái học, giảm áp lực cho ống cổ tay tạo cảm giác thoải mái khi làm việc trong thời gian dài hơn.

            • Các phím bấm có kích cỡ và khoảng cách hợp lý giúp bạn thao tác nhanh nhẹn, hạn chế tình trạng nhầm lẫn các lệnh, tốc độ phản hồi tốt, nhấn êm.

            • Bàn phím DareU kết nối với laptop, màn hình máy tính, màn hình game,… bằng USB Receiver (đầu thu USB) 2.4 GHz với đường truyền tin cậy, hầu như không bị nhiễu sóng.

            • Là chiếc bàn phím cơ thực thụ, DareU EK807G được lắp hệ thống Blue switch phù hợp với nhiều người sử dụng để chơi game lẫn văn phòng.',
            'p_color' => '#000',
            'p_type' => 'Ban Phim',
            'p_quantity' => 7,
            'p_photo1' => 'avatars/khong-day-dareu-ek807g-1-1.jpg',
            'p_photo2' => 'avatars/khong-day-dareu-ek807g-2-1.jpg',
            'p_photo3' => 'avatars/khong-day-dareu-ek807g-3-1.jpg',
            'p_photo4' => 'avatars/khong-day-dareu-ek807g-4-1.jpg',
            'p_photo5' => 'avatars/khong-day-dareu-ek807g-5-1.jpg',
        ]);
        //18
        DB::table('products')->insert([
            'p_name' => 'Bàn Phím Cơ Có Dây Gaming Rapoo V500alloy ',
            'cate_id' => 10,
            'p_price_old' => 550000,
            'p_price_new' => 390000,
            'p_description' => 'Bàn phím gaming kiểu Tenkeyless với 87 phím cơ bản độ nhạy cao, bền bỉ
            Rapoo V500alloy trang bị 87 phím cơ bản đủ đáp ứng mọi nhu cầu trên 1 bàn phím làm việc, chơi game thông thường. Có 2 lựa chọn màu chữ trên keycap cho người dùng: Đỏ hoặc Vàng (giao màu ngẫu nhiên).

            87 phím - Bàn Phím Cơ Có Dây Gaming Rapoo V500alloy Đen

            Hành trình phím tốt với khoảng cách phím rộng, Switch Rapoo Blue êm ái, độ nảy và độ nhạy tốt cho thao tác nhấn phím nhanh cực mượt và chuẩn xác.

            Tuổi thọ Switch trên bàn phím Rapoo lên đến 60 triệu lượt nhấn phím, cho bạn an tâm sử dụng bàn phím liên tục suốt thời gian dài.

            Switch Rapoo Blue bền bỉ - Bàn Phím Cơ Có Dây Gaming Rapoo V500alloy Đen

            Bên cạnh đó, bàn phím còn trang bị thêm chế độ chống xung đột trên 26 phím chức năng, giúp cho các thao tác với tổ hợp phím nhanh và chính xác hơn mà không gặp tình trạng xung đột tín hiệu, đảm bảo cho tốc độ soạn thảo, thao tác ứng dụng hay chiến game của bạn.',
            'p_color' => '#000',
            'p_type' => 'Ban Phim',
            'p_quantity' => 7,
            'p_photo1' => 'avatars/co-co-day-gaming-rapoo-v500alloy-den-1.jpg',
            'p_photo2' => 'avatars/co-co-day-gaming-rapoo-v500alloy-den-10.jpg',
            'p_photo3' => 'avatars/co-co-day-gaming-rapoo-v500alloy-den-11.jpg',
            'p_photo4' => 'avatars/co-co-day-gaming-rapoo-v500alloy-den-12.jpg',
            'p_photo5' => 'avatars/co-co-day-gaming-rapoo-v500alloy-den-13.jpg',
        ]);
    }
}

