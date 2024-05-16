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
            'p_photo1' => 'avatars/1715778856_1.jpg',
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
            'p_name' => 'Điện thoại Xiaomi Redmi Note 13 Pro 128GB ',
            'cate_id' => 7,
            'p_price_old' => 7290000,
            'p_price_new' => 6290000,
            'p_description' => 'Sự bùng nổ của công nghệ di động trong những năm gần đây đã mang đến cho người dùng vô số lựa chọn smartphone đa dạng. Trong phân khúc tầm trung, Xiaomi Redmi Note 13 Pro 128GB nổi lên như một ứng cử viên sáng giá với những ưu điểm vượt trội về thiết kế, hiệu năng nhờ chip Helio G99-Ultra, camera 200 MP và kết hợp sạc nhanh 67 W.
            Thiết kế đẹp mắt và hỗ trợ chuẩn IP54
            Điện thoại có vẻ ngoài hiện đại và sang trọng, với khung viền vuông vức giúp tạo điểm nhấn cho thiết kế khi mang lại cảm giác mạnh mẽ, nam tính lúc cầm nắm. Đi cùng với đó là mặt lưng và khung nhựa nhẹ được làm bóng, Redmi Note 13 Pro mang đến vẻ đẹp sang trọng, bóng bẩy, thu hút mọi ánh nhìn.

            Ở vị trí giao nhau giữa khung viền vuông và hai mặt trước sau, máy được làm cong nhẹ để tạo ra một cảm giác cầm nắm thoải mái và tự nhiên. Điều này giúp người dùng dễ dàng sử dụng thiết bị trong thời gian dài mà không gặp phải cảm giác mệt mỏi hay không thoải mái.

            Xiaomi Redmi Note 13 Pro không chỉ nổi bật với thiết kế, mà còn có sự đa dạng trong màu sắc, phù hợp với sở thích cá nhân của mỗi người dùng. Tùy chọn màu sắc gồm có xanh lá, đen và tím, giúp người dùng có thêm lựa chọn để thể hiện phong cách riêng của mình.

            Với viền dưới mỏng chỉ với 2.25 mm, Redmi Note 13 Pro mang lại trải nghiệm sử dụng mượt mà và còn tạo điểm nhấn cho thiết kế tổng thể của sản phẩm. Đặc biệt, việc đạt được tiêu chuẩn kháng nước và bụi IP54 cũng là điểm nhấn giúp bảo vệ thiết bị khỏi những tác động từ môi trường bên ngoài, gia tăng tuổi thọ và độ bền cho sản phẩm.

            Xiaomi Redmi Note 13 Pro thu hút sự chú ý như là một trung tâm giải trí di động với tích hợp loa kép đi kèm công nghệ âm thanh Dolby Atmos, từ đó mang lại trải nghiệm âm thanh sống động, chi tiết và mạnh mẽ, làm cho việc xem phim, nghe nhạc trở nên thú vị hơn bao giờ hết.

            Màn hình lớn đi kèm tần số quét cao 120 Hz
            Kích thước lớn 6.67 inch của màn hình này không chỉ mang lại trải nghiệm hấp dẫn hơn khi xem phim hay chơi game mà còn cho phép người dùng tận hưởng mọi chi tiết một cách rõ ràng. Độ phân giải Full HD+ (1080 x 2400 Pixels) cung cấp một bức tranh sống động và sắc nét, từng pixel đều phản ánh một thế giới đẹp mắt, đậm chất hiện đại.

            Tấm nền AMOLED cao cấp của Xiaomi Redmi Note 13 Pro đem lại màu sắc rực rỡ và sống động, giúp tái tạo được độ chân thực của mọi hình ảnh. Tấm nền này không chỉ làm cho màu sắc trở nên sống động hơn mà còn tăng cường độ tương phản, đảm bảo mọi chi tiết đều nổi bật và rõ ràng.

            Với tần số quét 120 Hz, mỗi hành động trên màn hình đều trở nên mượt mà đáng kinh ngạc. Từ những cử động nhỏ nhất trong game đến việc cuộn nhanh trên mạng xã hội, mọi thao tác đều được tái hiện một cách trơn tru và tự nhiên.

            Với độ sáng tối đa lên đến 1300 nits, giúp màn hình hiển thị rõ ràng ngay cả dưới ánh nắng mạnh mẽ nhất. Hơn nữa, việc hỗ trợ 100% DCI-P3 cũng sẽ giúp tăng cường độ tương phản và dải màu để mang lại hình ảnh chân thực và sống động như nội dung chiếu rạp.

            Camera 200 MP ghi lại sắc nét mọi khoảnh khắc
            Camera chính với độ phân giải cao 200 MP của Xiaomi Redmi Note 13 Pro thực sự là một công cụ chụp ảnh ấn tượng, là một cánh cửa để khám phá thế giới xung quanh một cách chi tiết và sắc nét hơn bao giờ hết.

            Khả năng chụp ảnh trong mọi điều kiện, kể cả trong điều kiện ánh sáng yếu hay rung lắc nhờ hỗ trợ của chống rung OIS, từ đó giúp bắt lấy những khoảnh khắc đẹp một cách trọn vẹn.

            Với camera góc siêu rộng 8 MP, Xiaomi Redmi Note 13 Pro mang đến khả năng thu trọn mọi khung cảnh vào khung hình. Từ những bãi biển bao la đến những đường phố nhộn nhịp, bạn có thể ghi lại mọi khoảnh khắc một cách độc đáo và đầy ấn tượng.

            Camera macro 2 MP cũng là một điểm đáng chú ý của Xiaomi Redmi Note 13 Pro, đây có thể là cánh cửa để bạn khám phá thế giới cận cảnh đầy thú vị. Tận hưởng việc ghi lại các chi tiết nhỏ nhất của cánh hoa hay giọt sương, mở ra một thế giới mới mẻ và tuyệt vời hơn để nâng cao sự thích thú mỗi khi chụp ảnh trên điện thoại.

            Cấu hình ổn định với chip MediaTek Helio G99-Ultra
            Với vi xử lý MediaTek Helio G99-Ultra, chiếc điện thoại Xiaomi này mang lại hiệu năng mạnh mẽ, phù hợp với nhu cầu sử dụng đa nhiệm của người dùng hiện nay.

            Con chip MediaTek này trên Xiaomi Redmi Note 13 Pro đạt trên 450.000 điểm thông qua Antutu (thông tin từ web hãng), chứng tỏ sức mạnh và hiệu suất ấn tượng của nó. Điều này đảm bảo rằng bạn có thể thực hiện các tác vụ nặng nề mà không gặp trở ngại và tận hưởng trải nghiệm sử dụng mượt mà, linh hoạt.

            Nhờ có RAM 8 GB, chiếc điện thoại Android này mang đến khả năng đa nhiệm mạnh mẽ, giúp bạn mở đồng thời nhiều ứng dụng và chạy các tác vụ nặng một cách mượt mà và hiệu quả. Không cần phải lo lắng về việc điện thoại trở nên chậm chạp khi sử dụng đồng thời nhiều ứng dụng hay game đòi hỏi tài nguyên.

            Pin 5000 mAh kết hợp cùng sạc nhanh 67 W
            Xiaomi Redmi Note 13 Pro được trang bị viên pin 5000 mAh, đảm bảo cho người dùng sự yên tâm và thoải mái trong mọi hoạt động hằng ngày. Từ việc trò chuyện liên tục qua điện thoại, duyệt web, xem video đến chơi game.

            Công nghệ sạc nhanh 67 W của máy mang lại cho người dùng trải nghiệm sạc pin mạnh mẽ và hiệu quả. Điện thoại có thể nạp đầy viên pin chỉ trong thời gian ngắn. Điều này không chỉ giúp bạn tiết kiệm thời gian mà còn tạo điều kiện thuận lợi cho việc sử dụng điện thoại một cách linh hoạt và không gián đoạn.

            Xiaomi Redmi Note 13 Pro không chỉ là một điện thoại thông minh có thiết kế đẹp và nhiều tính năng, mà còn là một chiếc máy mạnh mẽ nhờ vào hiệu suất ấn tượng và khả năng chụp ảnh xuất sắc. Sự kết hợp này cam kết mang lại trải nghiệm smartphone tối ưu nhất, đáp ứng mọi nhu cầu từ công việc đến giải trí.',
            'p_color' => 'green',
            'p_type' => 'Mobile Phones',
            'p_quantity' => 6,
            'p_photo1' => 'avatars/1715879832_1.jpg',
            'p_photo2' => 'avatars/1715879832_2.jpg',
            'p_photo3' => 'avatars/1715879832_3.jpg',
            'p_photo4' => 'avatars/1715879832_4.jpg',
            'p_photo5' => 'avatars/1715879832_5.jpg',
        ]);
    }
}

