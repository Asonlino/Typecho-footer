<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

</div>
</div>
</div>

<footer id="footer" role="contentinfo">
    <div class="footer-container" id="footer-container" style="padding:4px 0;">
        <div class="footer-text">&copy; <?php echo date('Y'); ?> CriCloud 保留所有权利。</div>
        <div class="footer-text">
            <a href="https://cdn.cricloud.top/photo/cloudflare_red.jpg" 
               style="color: inherit; text-decoration: none;" target="_blank" rel="noopener">
                性能安全由 
                <img src="https://cdn.cricloud.top/photo/cloudflare_icon.png" 
                     alt="Cloudflare Logo" 
                     style="width:16px;height:16px;vertical-align:middle;margin:0 4px;">
                Cloudflare 提供
            </a>
        </div>

        <div class="footer-text ip-line" id="ip-line1">正在获取IP信息...</div>
        <div class="footer-text ip-line" id="ip-line2"></div>
        <script>
        /*
name              Cloudflare_nodes_location_identify
website         https://github.com/Rayzggz/Cloudflare_nodes_location_identify
version           1.5
description       利用JavaScript检测并且输出Cloudflare节点位置
author            Rayzggz
e-mail            rayzggz@ranfu.net
license           GPL-3.0
*/
var req = new XMLHttpRequest();
req.open('GET', "/cdn-cgi/trace", false);
req.send(null);
var responseText = req.responseText;
var match = responseText.match(/colo=([A-Z]+)/);
var coloValue = match[1];
var lang = (navigator.language || navigator.browserLanguage).toLowerCase();
if(lang.indexOf('zh')>-1){
   var nodes = [['TNR', '塔那那利佛节点'], ['CPT', '开普敦节点'], ['CMN', '卡萨布兰卡节点'], ['DKR', '达喀尔节点'], ['DAR', '达累斯萨拉姆节点'], ['JIB', '吉布提市节点'], ['DUR', '德班节点'], ['JNB', '约翰尼斯堡节点'], ['KGL', '基加利节点'], ['LOS', '拉各斯节点'], ['LAD', '罗安达节点'], ['MPM', '马普托节点'], ['MBA', '蒙巴萨岛节点'], ['ROB', '利比里亚节点'], ['NBO', '内罗比节点'], ['MRU', '路易港节点'], ['RUN', '法属留尼汪岛节点'], ['BLR', '班加罗尔节点'], ['BKK', '曼谷节点'], ['BWN', '斯里巴加湾节点'], ['CEB', '宿务岛节点'], ['CTU', '中国成都节点'], ['MAA', '金奈节点'], ['CGP', '吉大港节点'], ['CKG', '中国重庆节点'], ['CMB', '科伦坡节点'], ['DAC', '达卡节点'], ['SZX', '中国东莞节点'], ['FUO', '中国佛山节点'], ['FOC', '中国福州节点'], ['CAN', '中国广州节点'], ['HGH', '中国杭州节点'], ['HAN', '河内节点'], ['HNY', '中国衡阳节点'], ['SGN', '胡志明市节点'], ['HKG', '中国香港节点'], ['HYD', '海得拉巴节点'], ['ISB', '伊斯兰堡节点'], ['CGK', '雅加达节点'], ['TNA', '中国济南节点'], ['JHB', '新山市节点'], ['KHI', '卡拉奇节点'], ['KTM', '加德满都节点'], ['CCU', '加尔各答节点'], ['KUL', '吉隆坡节点'], ['LHE', '拉合尔节点'], ['NAY', '中国廊坊节点'], ['LYA', '中国洛阳节点'], ['MFM', '中国澳门节点'], ['MLE', '马累节点'], ['MNL', '马尼拉节点'], ['BOM', '孟买节点'], ['NAG', '那格浦尔节点'], ['NNG', '中国南宁节点'], ['DEL', '新德里节点'], ['NBG', '中国宁波节点'], ['KIX', '大阪节点'], ['PNH', '金边节点'], ['TAO', '中国青岛节点'], ['ICN', '首尔节点'], ['SHA', '中国上海节点'], ['SHE', '中国沈阳节点'], ['SJW', '中国石家庄节点'], ['SIN', '新加坡节点'], ['SZV', '中国苏州节点'], ['TPE', '中国台北节点'], ['PBH', '廷布节点'], ['TSN', '中国天津节点'], ['NRT', '东京节点'], ['ULN', '乌兰巴托节点'], ['VTE', '万象节点'], ['WUH', '中国武汉节点'], ['WUX', '中国无锡节点'], ['XIY', '中国西安节点'], ['RGN', '仰光节点'], ['EVN', '耶烈万节点'], ['CGO', '中国郑州节点'], ['CSX', '中国长沙节点'], ['AMS', '阿姆斯特丹节点'], ['ATH', '雅典节点'], ['BCN', '巴塞罗纳节点'], ['BEG', '贝尔格莱德节点'], ['TXL', '柏林节点'], ['BRU', '布鲁塞尔节点'], ['OTP', '布加勒斯特节点'], ['BUD', '布达佩斯节点'], ['KIV', '基希讷乌节点'], ['CPH', '哥本哈根节点'], ['ORK', '科克郡节点'], ['DUB', '都柏林节点'], ['DUS', '杜塞尔多夫节点'], ['EDI', '爱丁堡节点'], ['FRA', '法兰克福节点'], ['GVA', '日内瓦节点'], ['GOT', '哥德堡节点'], ['HAM', '汉堡节点'], ['HEL', '赫尔辛基节点'], ['IST', '伊斯坦布尔节点'], ['KBP', '基辅节点'], ['LIS', '里斯本节点'], ['LHR', '伦敦节点'], ['LUX', '卢森堡节点'], ['MAD', '马德里节点'], ['MAN', '曼彻斯特节点'], ['MRS', '马赛节点'], ['MXP', '米兰节点'], ['DME', '莫斯科节点'], ['MUC', '慕尼黑节点'], ['LCA', '尼科西亚节点'], ['OSL', '奥斯陆节点'], ['CDG', '巴黎节点'], ['PRG', '布拉格节点'], ['KEF', '雷克雅未克节点'], ['RIX', '里加节点'], ['FCO', '罗马节点'], ['LED', '圣彼德堡节点'], ['SOF', '索非亚节点'], ['ARN', '斯德哥尔摩节点'], ['TLL', '塔林节点'], ['TBS', '第比利斯节点'], ['SKG', '塞萨洛尼基节点'], ['VIE', '维也纳节点'], ['VNO', '维尔纽斯节点'], ['WAW', '华沙节点'], ['ZAG', '萨格勒布节点'], ['ZRH', '苏黎世节点'], ['ARI', '阿里卡节点'], ['ASU', '亚松森节点'], ['BOG', '波哥大节点'], ['EZE', '布宜诺斯艾利斯节点'], ['CWB', '库里蒂巴节点'], ['FOR', '福塔雷萨节点'], ['GUA', '危地马拉节点'], ['LIM', '利马节点'], ['MDE', '麦德林节点'], ['PTY', '巴拿马城节点'], ['PBM', '帕拉马里博节点'], ['POA', '愉港节点'], ['UIO', '基多节点'], ['GIG', '里约热内卢节点'], ['SSA', '萨尔瓦多节点'], ['SJO', '圣何塞节点'], ['SCL', '圣地亚哥节点'], ['GRU', '圣保罗节点'], ['GND', '圣乔治节点'], ['TGU', '特古西加尔巴节点'], ['CUR', '威廉斯塔德节点'], ['AMM', '安曼节点'], ['BGW', '巴格达节点'], ['GYD', '巴库节点'], ['BEY', '贝鲁特节点'], ['DOH', '多哈节点'], ['DXB', '迪拜节点'], ['KWI', '科威特城节点'], ['BAH', '麦纳麦节点'], ['MCT', '马斯喀特节点'], ['ZDM', '拉马拉节点'], ['RUH', '利雅得节点'], ['TLV', '特拉维夫市节点'], ['IAD', 'Ashburn节点'], ['ATL', '亚特兰大节点'], ['BOS', '波士顿节点'], ['BUF', '水牛城节点'], ['YYC', '卡尔加里节点'], ['CLT', '卡尔加里节点'], ['ORD', '芝加哥节点'], ['CMH', '哥伦布市节点'], ['DFW', '达拉斯节点'], ['DEN', '丹佛节点'], ['DTW', '底特律节点'], ['HNL', '檀香山市节点'], ['IAH', '休斯顿节点'], ['IND', '印第安纳波利斯节点'], ['JAX', '杰克逊维尔节点'], ['MCI', '堪萨斯节点'], ['LAS', '拉斯维加斯节点'], ['LAX', '洛杉矶节点'], ['MFE', '麦卡伦节点'], ['MEM', '孟菲斯市节点'], ['MEX', '墨西哥城节点'], ['MIA', '迈阿密节点'], ['MSP', '明尼阿波里斯市节点'], ['MGM', '蒙哥马利市节点'], ['YUL', '蒙特利尔节点'], ['BNA', '那什维尔节点'], ['EWR', '纽瓦克市节点'], ['ORF', '诺福克节点'], ['OMA', '奥马哈市节点'], ['PHL', '费城节点'], ['PHX', '凤凰城节点'], ['PIT', '匹兹堡节点'], ['PAP', '太子港节点'], ['PDX', '波特兰节点'], ['QRO', '克雷塔罗市节点'], ['RIC', '里士满节点'], ['SMF', '萨克拉门托节点'], ['SLC', '盐湖城节点'], ['SAN', '圣地亚哥节点'], ['SJC', '圣何塞节点'], ['YXE', '萨斯卡通节点'], ['SEA', '西雅图节点'], ['STL', '圣路易斯节点'], ['TPA', '坦帕节点'], ['YYZ', '多伦多节点'], ['YVR', '温哥华节点'], ['TLH', '塔拉哈西节点'], ['YWG', '温尼伯节点'], ['ADL', '阿德莱德节点'], ['AKL', '奥克兰节点'], ['BNE', '布里斯班节点'], ['MEL', '墨尔本节点'], ['NOU', '努美阿节点'], ['PER', '佩斯节点'], ['SYD', '悉尼节点'],];
}else{
    var nodes = [['TNR', 'Antananarivo, Madagascar'], ['CPT', 'Cape Town, South Africa'], ['CMN', 'Casablanca, Morocco'], ['DKR', 'Dakar, Senegal'], ['DAR', 'Dar Es Salaam, Tanzania'], ['JIB', 'Djibouti City, Djibouti'], ['DUR', 'Durban, South Africa'], ['JNB', 'Johannesburg, South Africa'], ['KGL', 'Kigali, Rwanda'], ['LOS', 'Lagos, Nigeria'], ['LAD', 'Luanda, Angola'], ['MPM', 'Maputo, MZ'], ['MBA', 'Mombasa, Kenya'], ['ROB', 'Monrovia, Liberia'], ['NBO', 'Nairobi, Kenya'], ['MRU', 'Port Louis, Mauritius'], ['RUN', 'Réunion, France'], ['BLR', 'Bangalore, India'], ['BKK', 'Bangkok, Thailand'], ['BWN', 'Bandar Seri Begawan, Brunei'], ['CEB', 'Cebu, Philippines'], ['CTU', 'Chengdu, China'], ['MAA', 'Chennai, India'], ['CGP', 'Chittagong, Bangladesh'], ['CKG', 'Chongqing, China'], ['CMB', 'Colombo, Sri Lanka'], ['DAC', 'Dhaka, Bangladesh'], ['SZX', 'Dongguan, China'], ['FUO', 'Foshan, China'], ['FOC', 'Fuzhou, China'], ['CAN', 'Guangzhou, China'], ['HGH', 'Hangzhou, China'], ['HAN', 'Hanoi, Vietnam'], ['HNY', 'Hengyang, China'], ['SGN', 'Ho Chi Minh City, Vietnam'], ['HKG', 'Hong Kong, China'], ['HYD', 'Hyderabad, India'], ['ISB', 'Islamabad, Pakistan'], ['CGK', 'Jakarta, Indonesia'], ['TNA', 'Jinan, China'], ['JHB', 'Johor Bahru, Malaysia'], ['KHI', 'Karachi, Pakistan'], ['KTM', 'Kathmandu, Nepal'], ['CCU', 'Kolkata, India'], ['KUL', 'Kuala Lumpur, Malaysia'], ['LHE', 'Lahore, Pakistan'], ['NAY', 'Langfang, China'], ['LYA', 'Luoyang, China'], ['MFM', 'Macau, China'], ['MLE', 'Malé, Maldives'], ['MNL', 'Manila, Philippines'], ['BOM', 'Mumbai, India'], ['NAG', 'Nagpur, India'], ['NNG', 'Nanning, China'], ['DEL', 'New Delhi, India'], ['NBG', 'Ningbo, China'], ['KIX', 'Osaka, Japan'], ['PNH', 'Phnom Penh, Cambodia'], ['TAO', 'Qingdao, China'], ['ICN', 'Seoul, South Korea'], ['SHA', 'Shanghai, China'], ['SHE', 'Shenyang, China'], ['SJW', 'Shijiazhuang, China'], ['SIN', 'Singapore, Singapore'], ['SZV', 'Suzhou, China'], ['TPE', 'Taipei, China'], ['PBH', 'Thimphu, Bhutan'], ['TSN', 'Tianjin, China'], ['NRT', 'Tokyo, Japan'], ['ULN', 'Ulaanbaatar, Mongolia'], ['VTE', 'Vientiane, Laos'], ['WUH', 'Wuhan, China'], ['WUX', 'Wuxi, China'], ['XIY', 'Xi\'an, China'], ['RGN', 'Yangon, Myanmar'], ['EVN', 'Yerevan, Armenia'], ['CGO', 'Zhengzhou, China'], ['CSX', 'Zuzhou, China'], ['AMS', 'Amsterdam, Netherlands'], ['ATH', 'Athens, Greece'], ['BCN', 'Barcelona, Spain'], ['BEG', 'Belgrade, Serbia'], ['TXL', 'Berlin, Germany'], ['BRU', 'Brussels, Belgium'], ['OTP', 'Bucharest, Romania'], ['BUD', 'Budapest, Hungary'], ['KIV', 'Chișinău, Moldova'], ['CPH', 'Copenhagen, Denmark'], ['ORK', 'Cork, Ireland'], ['DUB', 'Dublin, Ireland'], ['DUS', 'Düsseldorf, Germany'], ['EDI', 'Edinburgh, United Kingdom'], ['FRA', 'Frankfurt, Germany'], ['GVA', 'Geneva, Switzerland'], ['GOT', 'Gothenburg, Sweden'], ['HAM', 'Hamburg, Germany'], ['HEL', 'Helsinki, Finland'], ['IST', 'Istanbul, Turkey'], ['KBP', 'Kyiv, Ukraine'], ['LIS', 'Lisbon, Portugal'], ['LHR', 'London, United Kingdom'], ['LUX', 'Luxembourg City, Luxembourg'], ['MAD', 'Madrid, Spain'], ['MAN', 'Manchester, United Kingdom'], ['MRS', 'Marseille, France'], ['MXP', 'Milan, Italy'], ['DME', 'Moscow, Russia'], ['MUC', 'Munich, Germany'], ['LCA', 'Nicosia, Cyprus'], ['OSL', 'Oslo, Norway'], ['CDG', 'Paris, France'], ['PRG', 'Prague, Czech Republic'], ['KEF', 'Reykjavík, Iceland'], ['RIX', 'Riga, Latvia'], ['FCO', 'Rome, Italy'], ['LED', 'Saint Petersburg, Russia'], ['SOF', 'Sofia, Bulgaria'], ['ARN', 'Stockholm, Sweden'], ['TLL', 'Tallinn, Estonia'], ['TBS', 'Tbilisi, Georgia'], ['SKG', 'Thessaloniki, Greece'], ['VIE', 'Vienna, Austria'], ['VNO', 'Vilnius, Lithuania'], ['WAW', 'Warsaw, Poland'], ['ZAG', 'Zagreb, Croatia'], ['ZRH', 'Zürich, Switzerland'], ['ARI', 'Arica, Chile'], ['ASU', 'Asunción, Paraguay'], ['BOG', 'Bogotá, Colombia'], ['EZE', 'Buenos Aires, Argentina'], ['CWB', 'Curitiba, Brazil'], ['FOR', 'Fortaleza, Brazil'], ['GUA', 'Guatemala City, Guatemala'], ['LIM', 'Lima, Peru'], ['MDE', 'Medellín, Colombia'], ['PTY', 'Panama City, Panama'], ['PBM', 'Paramaribo, Suriname'], ['POA', 'Porto Alegre, Brazil'], ['UIO', 'Quito, Ecuador'], ['GIG', 'Rio de Janeiro, Brazil'], ['SSA', 'Salvador, Brazil'], ['SJO', 'San José, Costa Rica'], ['SCL', 'Santiago, Chile'], ['GRU', 'São Paulo, Brazil'], ['GND', 'St. George\'s, Grenada'], ['TGU', 'Tegucigalpa, Honduras'], ['CUR', 'Willemstad, Curaçao'], ['AMM', 'Amman, Jordan'], ['BGW', 'Baghdad, Iraq'], ['GYD', 'Baku, Azerbaijan'], ['BEY', 'Beirut, Lebanon'], ['DOH', 'Doha, Qatar'], ['DXB', 'Dubai, United Arab Emirates'], ['KWI', 'Kuwait City, Kuwait'], ['BAH', 'Manama, Bahrain'], ['MCT', 'Muscat, Oman'], ['ZDM', 'Ramallah'], ['RUH', 'Riyadh, Saudi Arabia'], ['TLV', 'Tel Aviv, Israel'], ['IAD', 'Ashburn, VA, United States'], ['ATL', 'Atlanta, GA, United States'], ['BOS', 'Boston, MA, United States'], ['BUF', 'Buffalo, NY, United States'], ['YYC', 'Calgary, AB, Canada'], ['CLT', 'Charlotte, NC, United States'], ['ORD', 'Chicago, IL, United States'], ['CMH', 'Columbus, OH, United States'], ['DFW', 'Dallas, TX, United States'], ['DEN', 'Denver, CO, United States'], ['DTW', 'Detroit, MI, United States'], ['HNL', 'Honolulu, HI, United States'], ['IAH', 'Houston, TX, United States'], ['IND', 'Indianapolis, IN, United States'], ['JAX', 'Jacksonville, FL, United States'], ['MCI', 'Kansas City, MO, United States'], ['LAS', 'Las Vegas, NV, United States'], ['LAX', 'Los Angeles, CA, United States'], ['MFE', 'McAllen, TX, United States'], ['MEM', 'Memphis, TN, United States'], ['MEX', 'Mexico City, Mexico'], ['MIA', 'Miami, FL, United States'], ['MSP', 'Minneapolis, MN, United States'], ['MGM', 'Montgomery, AL, United States'], ['YUL', 'Montréal, QC, Canada'], ['BNA', 'Nashville, TN, United States'], ['EWR', 'Newark, NJ, United States'], ['ORF', 'Norfolk, VA, United States'], ['OMA', 'Omaha, NE, United States'], ['PHL', 'Philadelphia, United States'], ['PHX', 'Phoenix, AZ, United States'], ['PIT', 'Pittsburgh, PA, United States'], ['PAP', 'Port-Au-Prince, Haiti'], ['PDX', 'Portland, OR, United States'], ['QRO', 'Queretaro, MX, Mexico'], ['RIC', 'Richmond, Virginia'], ['SMF', 'Sacramento, CA, United States'], ['SLC', 'Salt Lake City, UT, United States'], ['SAN', 'San Diego, CA, United States'], ['SJC', 'San Jose, CA, United States'], ['YXE', 'Saskatoon, SK, Canada'], ['SEA', 'Seattle, WA, United States'], ['STL', 'St. Louis, MO, United States'], ['TPA', 'Tampa, FL, United States'], ['YYZ', 'Toronto, ON, Canada'], ['YVR', 'Vancouver, BC, Canada'], ['TLH', 'Tallahassee, FL, United States'], ['YWG', 'Winnipeg, MB, Canada'], ['ADL', 'Adelaide, SA, Australia'], ['AKL', 'Auckland, New Zealand'], ['BNE', 'Brisbane, QLD, Australia'], ['MEL', 'Melbourne, VIC, Australia'], ['NOU', 'Noumea, New caledonia'], ['PER', 'Perth, WA, Australia'], ['SYD', 'Sydney, NSW, Australia'],];
}
for (var i = 0; i < nodes.length; i++) {
	if (coloValue == nodes[i][0]) {
		document.write("[" + coloValue + "]" + nodes[i][1]);
		break;
	}
}
        </script>
    </div>

    <div id="ip-popup" class="ip-popup" aria-hidden="true">
        <div class="popup-content">
            <div class="popup-header">IP地址</div>
            <div class="popup-line-label" id="popup-ipv4-label">IPv4：</div>
            <div class="popup-line-content" id="popup-ipv4"></div>
            <div class="popup-line-label" id="popup-ipv6-label">IPv6：</div>
            <div class="popup-line-content" id="popup-ipv6"></div>
        </div>
    </div>

<script>
async function fetchIPInfo() {
    const line1 = document.getElementById('ip-line1');
    const line2 = document.getElementById('ip-line2');
    const popupIPv4 = document.getElementById('popup-ipv4');
    const popupIPv6 = document.getElementById('popup-ipv6');

    // 超时请求，超时时间为 1000 ms
    function fetchWithTimeout(url, timeoutMs = 1000) {
        const controller = new AbortController();
        const signal = controller.signal;
        const timeoutId = setTimeout(() => controller.abort(), timeoutMs);
        return fetch(url, { signal }).then(res => {
            clearTimeout(timeoutId);
            return res.ok ? res.json() : null;
        }).catch(() => {
            clearTimeout(timeoutId);
            return null;
        });
    }

    try {
        const [ipv4Res, ipv6Res] = await Promise.all([
            fetchWithTimeout('https://geoip4.icysn.cn/api/json', 10000),
            fetchWithTimeout('https://geoip6.icysn.cn/api/json', 10000)
        ]);

        if (ipv4Res?.code === 0 && ipv4Res.data) {
            const data = ipv4Res.data;
            const ip = data.ip || '获取失败';
            const isp = data.as?.info || '';
            const type = data.type || '';
            const regions = data.regions || [];
            const country = data.country?.name || '';
            const prov = regions[0] || '';
            const city = regions[1] || '';
            const district = regions[2] || '';

            line1.textContent = `${ip} ${isp} ${type}`.trim();
            line2.textContent = [country, prov, city, district].filter(Boolean).join(' ') || '获取失败';

            popupIPv4.textContent = `${ip}\n${isp} ${type}\n${[country, prov, city, district].filter(Boolean).join(' ')}`;
        } else {
            line1.textContent = '获取失败';
            line2.textContent = '获取失败';
            popupIPv4.textContent = '获取失败';
        }

        if (ipv6Res?.code === 0 && ipv6Res.data) {
            const data = ipv6Res.data;
            const ip = data.ip || '获取失败';
            const isp = data.as?.info || '';
            const type = data.type || '';
            const regions = data.regions || [];
            const country = data.country?.name || '';
            const prov = regions[0] || '';
            const city = regions[1] || '';
            const district = regions[2] || '';

            popupIPv6.textContent = `${ip}\n${isp} ${type}\n${[country, prov, city, district].filter(Boolean).join(' ')}`;
        } else {
            popupIPv6.textContent = '获取失败';
        }

    } catch (err) {
        line1.textContent = '获取失败';
        line2.textContent = '获取失败';
        popupIPv4.textContent = 'IPv4：获取失败';
        popupIPv6.textContent = 'IPv6：获取失败';
        console.error(err);
    }
}

document.addEventListener('DOMContentLoaded', () => {
    fetchIPInfo();

    const popup = document.getElementById('ip-popup');
    const line1 = document.getElementById('ip-line1');
    const line2 = document.getElementById('ip-line2');
    const popupContent = popup.querySelector('.popup-content');
    let isOpen = false;

    const togglePopup = () => {
        if (isOpen) {
            popup.classList.remove('show');
            popupContent.classList.remove('is-open'); // 移除形变 class
            setTimeout(() => popup.style.display = 'none', 300);
        } else {
            popup.style.display = 'flex';
            updatePopupPosition();
            setTimeout(() => {
                popup.classList.add('show');
                popupContent.classList.add('is-open'); // 添加形变 class
            }, 10);
        }
        isOpen = !isOpen;
    };

    line1.addEventListener('click', togglePopup);
    line2.addEventListener('click', togglePopup);

    function updatePopupPosition() {
        const line2Rect = line2.getBoundingClientRect();
        const container = document.getElementById('footer-container');
        const scrollTop = window.scrollY || document.documentElement.scrollTop;
        const top = line2Rect.top + scrollTop - popup.offsetHeight - 25;

        popup.style.position = 'absolute';
        popup.style.top = top + 'px';
        popup.style.left = container.offsetLeft + container.offsetWidth / 2 - popup.offsetWidth / 2 + 'px';
    }

    window.addEventListener('scroll', () => {
        if (popup.style.display === 'flex') updatePopupPosition();
    });
    window.addEventListener('resize', () => {
        if (popup.style.display === 'flex') updatePopupPosition();
    });

    document.addEventListener('click', (e) => {
        if (!isOpen) return;
        if (!popup.contains(e.target) && e.target !== line1 && e.target !== line2) togglePopup();
    });

    // 为 popup-content 添加鼠标交互形变 (Liquid-like Hover Effect)
    popup.addEventListener('mousemove', (e) => {
        if (!isOpen) return;
        const rect = popup.getBoundingClientRect();
        const x = e.clientX - rect.left; // x position within the element.
        const y = e.clientY - rect.top;  // y position within the element.
        const centerX = rect.width / 2;
        const centerY = rect.height / 2;

        // 归一化到 -1 到 1 的范围，并调整敏感度
        const moveX = (x - centerX) / centerX * 4; // 敏感度: 4
        const moveY = (y - centerY) / centerY * 4; // 敏感度: 4
        
        // 增加一个微小的 3D 旋转效果
        const rotateX = moveY * -0.5; // 限制旋转角度
        const rotateY = moveX * 0.5; // 限制旋转角度
        
        popupContent.style.transform = `translate3d(${moveX}px, ${moveY}px, 0) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale(1.01)`;
    });

    // 鼠标移出时恢复形变
    popup.addEventListener('mouseleave', () => {
        if (isOpen) {
            // 恢复到初始的打开状态形变
            popupContent.style.transform = 'translate3d(0, 0, 0) rotateX(0deg) rotateY(0deg) scale(1.01)';
        }
    });

});
</script>

<style>
/* ... (其余CSS保持不变) ... */
#footer, #footer .footer-container, #footer .footer-text {
    margin: 0;
    padding: 2px 0;
    line-height: 1.4;
    box-sizing: border-box;
}

.footer-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    position: relative;
    /* 确保父容器有 perspective */
    perspective: 800px; 
    padding: 4px 0;
}

.footer-text {
    font-size: 13px;
    color: #999;
    text-align: center;
    cursor: pointer;
}

.ip-line {
    text-align: center;
    font-size: 13px;
    color: #999;
    cursor: pointer;
    white-space: pre-line;
}

/* --- Liquid Glass 效果 --- */
#ip-popup {
    display: none;
    opacity: 0;
    flex-direction: column;
    /* 更透明，更偏向白色 */
    background: rgba(255, 255, 255, 0.1); 
    /* 增加 blur 和 saturate，模拟液体玻璃的平滑感 */
    backdrop-filter: blur(30px) saturate(200%);
    -webkit-backdrop-filter: blur(30px) saturate(200%);
    color: #222;
    border-radius: 20px; /* 更圆润 */
    padding: 16px 24px;
    min-width: 280px;
    z-index: 9999;
    /* 增强边框的白色高光感 */
    box-shadow: 0 8px 30px rgba(0,0,0,0.15), 0 0 0 1px rgba(255,255,255,0.4) inset; 
    transform: translateY(20px);
    transition: opacity 0.35s ease-out, transform 0.35s cubic-bezier(0.25,1.5,0.5,1);
    /* 调整边框颜色使其更像高光 */
    border: 1px solid rgba(255, 255, 255, 0.5); 
    overflow: visible; /* 允许阴影和形变显示 */
}

/* 固定柔光层（无滑动变化）- 调整为更柔和的内部高光 */
#ip-popup::before {
    content: "";
    position: absolute;
    inset: 0;
    /* 调整高光位置和强度 */
    background: radial-gradient(circle at 40% 25%, rgba(255,255,255,0.5), rgba(255,255,255,0) 70%);
    mix-blend-mode: soft-light;
    pointer-events: none;
    border-radius: 20px;
    opacity: 0.8;
}

#ip-popup.show {
    opacity: 1;
    transform: translateY(0);
}

.popup-content {
    display: flex;
    flex-direction: column;
    gap: 8px;
    align-items: center;
    /* 启用 3D 变换的性能优化 */
    transform-style: preserve-3d; 
    will-change: transform;
    /* 动画过渡，用于鼠标移入/移出效果 */
    transition: transform 0.2s cubic-bezier(0.2, 0.8, 0.5, 1);
}

/* 开启面板时的形变 */
.popup-content.is-open {
    /* 初始打开时增加一个微小的 scale，模拟液体“充盈” */
    transform: scale(1.01); 
}

.popup-header {
    width: 100%;
    display: flex;
    justify-content: center;
    font-weight: bold;
    margin-bottom: 6px;
    color: #111;
}

.popup-line-label {
    width: 100%;
    text-align: left;
    font-size: 13px;
    color: #444;
}

.popup-line-content {
    text-align: center;
    font-size: 13px;
    color: #444;
    white-space: pre-line;
}
</style>

<?php $this->footer(); ?>
</body>
</html>
