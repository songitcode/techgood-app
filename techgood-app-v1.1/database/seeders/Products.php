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
    }
}

