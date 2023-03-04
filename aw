console_handlers = {}
函数字符串：拆分（sep）
	 sep, fields = sep 或 ":", {}
	 pattern = string.format("([^%s]+)", sep)
	自我：gsub（模式，功能（c）
		字段[#fields + 1] = c
	结尾）
	返回字段
结尾
 weapon_type_int = {
	1、
	1、
	1、
	1、
	[7] = 3,
	[8] = 3,
	[9] = 5,
	[10] = 3,
	[11] = 5,
	[13] = 3,
	[14] = 6,
	[16] = 3,
	[17] = 2,
	[19] = 2,
	[20] = 19,
	[23] = 2,
	[24] = 2,
	[25] = 4,
	[26] = 2,
	[27] = 4,
	[28] = 6,
	[29] = 4,
	[30] = 1,
	[31] = 0,
	[32] = 1,
	[33] = 2,
	[34] = 2,
	[35] = 4,
	[36] = 1,
	[37] = 19,
	[38] = 5,
	[39] = 3,
	[40] = 5,
	[41] = 0,
	[42] = 0,
	[43] = 9,
	[44] = 9,
	[45] = 9,
	[46] = 9,
	[47] = 9,
	[48] = 9,
	[49] = 7,
	[50] = 19,
	[51] = 19,
	[52] = 19,
	[55] = 19,
	[56] = 19,
	[57] = 11,
	[59] = 0,
	[60] = 3,
	[61] = 1,
	[63] = 1,
	[64] = 1,
	[68] = 9,
	[69] = 12,
	[70] = 13,
	[72] = 15,
	[74] = 16,
	[75] = 16,
	[76] = 16,
	[78] = 16,
	[80] = 0,
	[81] = 9,
	[82] = 9,
	[83] = 9,
	[84] = 9,
	[85] = 14,
	[500] = 0,
	[503] = 0,
	[505] = 0,
	[506] = 0,
	[507] = 0,
	[508] = 0,
	[509] = 0,
	[512] = 0,
	[514] = 0,
	[515] = 0,
	[516] = 0,
	[517] = 0,
	[518] = 0,
	[519] = 0,
	[520] = 0,
	[521] = 0,
	[522] = 0,
	[523] = 0,
	[525] = 0
}
local wep_type = {taser = 0, knife = 0, pistol = 1, smg = 2, rifle = 3, shotgun = 4, sniperrifle = 5, machinegun = 6, c4 = 7, grenade = 9, stackableitem = 11, fists = 12, breachcharge = 13, bumpmine = 14, tablet = 15, melee = 16, equipment = 19}
局部函数 getWeaponType(wepIdx)
	本地 typeInt = weapon_type_int[tonumber(wepIdx)]
	对于索引，成对的值（wep_type）做
		如果值 == typeInt 那么
			返回索引 ~= 0 和索引 or (tonumber(wepIdx) == 31 and "taser" or "knife")
		结尾
	结尾
结尾

局部函数 register_console_handler(command, handler, force)
	如果 console_handlers[command] 而不是强制那么
		返回假
	结尾
	console_handlers[命令] = 处理程序
	返回真
结尾
callbacks.Register("SendStringCmd", "lib_console_input", 函数(c)
	本地 raw_console_input = c:Get()
	local parsed_console_input = raw_console_input:split(" ")
	本地命令 = table.remove(parsed_console_input, 1)
	本地海峡=“”
	对于索引，ipairs(parsed_console_input) 中的值做
		str = str .. 值 .. " "
	结尾
	如果 console_handlers[command] 和 console_handlers[command](str:sub(1, -2)) 那么
		c:设置("\0")
	结尾
结尾）
本地主 = [====[
	if (typeof(SClient) == 'undefined' && $.GetContextPanel().id == "CSGOHud") {
        SClient = (函数(){
            $.Msg("计分板武器注入成功！欢迎：" + MyPersonaAPI.GetName())
            变量处理程序 = {}
            让 registerHandler = 函数（类型，回调）{
                处理程序[类型] = 回调
            }
            让 receivedHandler = 函数（消息）{
                如果（处理程序[消息类型]）{
                    处理程序[消息.类型]（消息）
                }
            }
            返回 {
                register_handler：注册处理程序，
                接收：receivedHandler
            }
        })()
    }
    如果 ($.GetContextPanel().id == "CSGOHud") { $.Schedule(1, ()=>{GameInterfaceAPI.ConsoleCommand("!panoCall e_PanelWeaponLoaded")}) }
    if (typeof(SImageManager) == 'undefined' && $.GetContextPanel().id == "CSGOHud") {
        SImageManager = (函数(){
            var HashMap = function HashMap() {
                可变长度= 0；
                var obj = new 对象();
                this.isEmpty = 函数 () {
                    返回长度== 0；
                };
                this.containsKey = 函数（键）{
                    返回（输入对象）；
                };
                this.containsValue = 函数（值）{
                    对于（obj 中的 var 键）{
                        如果（对象 [键] == 值）{
                            返回真；
                        }
                    }
                    返回假；
                };
                this.put = 函数（键，值）{
                    如果（！this.containsKey（键））{
                        长度++；
                    }
                    obj[键] = 值；
                };
                this.get = 函数（键）{
                    返回 this.containsKey(key) ？obj[键]：空；
                };
                this.remove = 函数（键）{
                    if (this.containsKey(key) && (delete obj[key])) {
                        长度 - ;
                    }
                };
                this.values = function () {
                    var _values = new Array();
                    对于（obj 中的 var 键）{
                        _values.push(obj[key]);
                    }
                    返回值；
                };
                this.keySet = function () {
                    var _keys = new Array();
                    对于（obj 中的 var 键）{
                        _keys.push(键);
                    }
                    返回键；
                };
                this.size = function () {
                    返回长度；
                };
                this.clear = 函数 () {
                    长度 = 0；
                    对象=新对象（）；
                };
            }
            var ImagePool = new HashMap()
            类 ImageCell {
                构造函数（xuid）{
                    变种更新=假
                    var lastUpdateWep = ""
                    var lastUpdateHL = ""
                    变种 lastColor = “”
                    让 primaryLut = ['smg', '步枪', '重型']
                    让 partInit = "<root><styles><include src='file://{resources}/styles/csgostyles.css'/><include src='file://{resources}/styles/scoreboard.css' /><include src='file://{resources}/styles/hud/hudweaponselection.css' /></styles><Panel style='margin-right:0px;flow-children:right;horizo​​ntal-align:对;'></Panel></root>"
                    this.getTargetXUID = () => {
                        返回 xuid
                    }
                    this.getTargetPanel = () => {
                        变量面板
                        var par = $.GetContextPanel().FindChildTraverse("player-" + xuid)
                        如果（！标准杆）
                            返回
                        var parent = par.FindChildTraverse("名字")
                        如果（！父母）
                            返回
                        panel = parent.FindChildTraverse("CustomImagePanel")
                        如果（！面板）{
                            panel = $.CreatePanel("Panel", parent, "CustomImagePanel")
                        }
                        返回面板
                    }
                    this.getState = () => {
                        返回更新
                    }
                    this.update = (color, equipments, alpha, hl) => {
                        让 colorRGBtoHex = (color) => {
                            var rgb = color.split(',')
                            var r = parseInt(rgb[0])
                            var g = parseInt(rgb[1])
                            var b = parseInt(rgb[2])
                            var hex = "#" + ((1 << 24) + (r << 16) + (g << 8) + b).toString(16).slice(1)
                            返回十六进制
                        }
                        让 targetColor = colorRGBtoHex(颜色)
                        让面板 = this.getTargetPanel()
                        如果（！面板）{返回}
                        如果 (GameStateAPI.GetPlayerStatus(xuid) == 1) {
                            面板.RemoveAndDeleteChildren()
                            返回
                        }
                        if (lastUpdateHL != hl || lastUpdateWep != equipments.toString() || lastColor != color) {
                            更新=真
                            面板.RemoveAndDeleteChildren()
                            panel.BLoadLayoutFromString(partInit, false, false)
                            让 sortedEQ = []
                            让 nades = []
                            让其他人 = []
                            equipments.forEach((item)=>{
                                让 curType = InventoryAPI.GetSlot(InventoryAPI.GetFauxItemIDFromDefAndPaintIndex(parseInt(item), 0))
                                如果（curType == '手榴弹'）{
                                    nades.push（项目）
                                } else if (curType == 'secondary') {
                                    nades.unshift（项目）
                                } else if(primaryLut.includes(curType)) {
                                    sortedEQ.push（项目）
                                } 别的 {
                                    others.push(item)
                                }
                            })
                            sortedEQ.concat(nades).concat(others).forEach((item) => {
                                让 cellPanel = $.CreatePanel("Panel", panel, "CustomPanelCell", {
                                    style: 'margin-right:3px; 高度：18px；'
                                })
                                让 nameUnClipped = InventoryAPI.GetItemDefinitionName(InventoryAPI.GetFauxItemIDFromDefAndPaintIndex(parseInt(item), 0))
                                如果（！nameUnClipped）
                                    返回
                                $.CreatePanel("Image", cellPanel, "CustomImageCell", {
                                    缩放比例：'拉伸以适应 y-preserve-aspect'，
                                    src: 'file://{images}/icons/equipment/' + nameUnClipped.replace( 'weapon_', '' ).replace('item_defuser', 'defuser') + '.svg',
                                    样式：hl == 项目？('wash-color-fast: white;opacity:' + alpha + ';-s2-mix-blend-mode: normal;img-shadow: ' + targetColor + ' 1px 1px 1.5px 0.5;') : ('wash -color-fast: hsv-transform(#e8e8e8, 0, 0.96, 0.18);不透明度:' + (alpha-0.02) + ';-s2-mix-blend-mode: normal;')
                                })
                            })
                        }
                        lastUpdateHL = HL
                        lastUpdateWep = equipments.toString()
                        最后颜色 = 颜色
                        更新=假
                    }
                }
            }
            返回 {
                get_cache: (xuid) => {
                    如果（ImagePool.containsKey（xuid））{
                        返回 ImagePool.get(xuid)
                    } 别的 {
                        返回假
                    }
                },
                dispatch: (entid, color, alpha, weapons, hl) => {
                    让 xuid = GameStateAPI.GetPlayerXuidStringFromEntIndex(entid)
                    如果（ImagePool.containsKey（xuid））{
                        var targetCell = ImagePool.get(xuid)
                        var waitForUpdate = () => {
                            如果（targetCell.getState（））{
                                $.Schedule(0.05, waitForUpdate)
                            } 别的 {
                                targetCell.update（颜色，武器，alpha，hl）
                            }
                        }
                        等待更新()
                        返回真
                    } 别的 {
                        ImagePool.put(xuid, new ImageCell(xuid))
                        返回假
                    }
                },
                销毁：（）=> {
                    图像池.clear()
                }
            }
        })()
        $.RegisterForUnhandledEvent("Scoreboard_OnEndOfMatch", SImageManager.destroy)
        $.RegisterForUnhandledEvent('CSGOShowMainMenu', SImageManager.destroy)
        $.RegisterForUnhandledEvent('OpenPlayMenu', SImageManager.destroy)
        $.RegisterForUnhandledEvent('PanoramaComponent_Lobby_ReadyUpForMatch', SImageManager.destroy)
        SClient.register_handler("updateWeapons", (message) => {
            如果（！SImageManager.dispatch（message.content.xuid，message.content.colorSet，message.content.alpha，message.content.weapons，message.content.highLightWep））{
                $.Schedule(0.5, () => {
                    SImageManager.dispatch(message.content.xuid, message.content.colorSet, message.content.alpha, message.content.weapons, message.content.highLightWep)
                })
            }
        })
    }
]====]

本地处理程序 = {}
本地待定 = {}
本地客户 = {
	updateWeapons = loadstring([=[
        返回函数（entid、颜色、alpha、武器、高光）
            如果不是武器或#weapons == 0 那么
                返回
            结尾
            alpha = string.format("%1.3f", alpha / 255)
            local colorStr = "" .. tostring(color[1]) .. "," .. tostring(color[2]) .. "," .. tostring(color[3])
            本地武器Str =“”
            对于索引，ipairs（武器）中的值做
                weaponsStr = weaponsStr .. "\"" .. 值 .. "\"" .. ","
            结尾
            weaponsStr = weaponsStr:sub(1, -2)
            local panoStr = string.format("if(typeof (SClient) != 'undefined') { SClient.receive(%s) }", string.format([[{type: "%s", content: %s} ]], "updateWeapons", string.format([[{xuid: %s, colorSet: "%s", alpha: %s , weapons: [%s], highLightWep:"%s" }]], entid, colorStr, alpha, weaponsStr, 高光)))
            全景.RunScript(panoStr)
        结尾
    ]=])(),
	接收=功能（消息）
		对于索引，ipairs(handlers) 中的值做
			如果值（消息）那么
				返回
			结尾
		结尾
	结尾，
	register_handler = 函数（回调）
		table.insert（处理程序，回调）
	结尾
}
register_console_handler（“！panoCall”，函数（args）
	客户端.receive(args)
	返回真
结束，真实）
本地 last_check_sec = 0
本地加载=假
callbacks.Register("Draw", "AWSStrangePanoramaFixer", function()
	如果加载然后
		返回
	结尾
	local cur = string.format("%1.0f", tostring(globals.RealTime()))
	如果 last_check_sec ~= cur 那么
		panorama.RunScript(主)
		last_check_sec = 当前
	结尾
结尾）
Client.register_handler(函数(消息)
	如果 msg == "e_PanelWeaponLoaded" 那么
		加载=真
		callbacks.Unregister("Draw", "AWSStrangePanoramaFixer")
		返回真
	结尾
结尾）
本地实体_GetPlayerResources、实体_FindByClass、实体_GetByIndex、实体_GetLocalPlayer、实体_GetByUserID =
    entities.GetPlayerResources,
    entities.FindByClass，
    entities.GetByIndex,
    entities.GetLocalPlayer,
    实体.GetByUserID
本地客户端_GetLocalPlayerIndex,
    client_ChatSay,
    client_WorldToScreen,
    客户命令，
    client_GetPlayerIndexByUserID,
    client_SetConVar,
    client_GetPlayerInfo,
    client_GetConVar =
    client.GetLocalPlayerIndex,
    client.ChatSay,
    客户端.WorldToScreen,
    客户端命令，
    client.GetPlayerIndexByUserID,
    客户端.SetConVar,
    client.GetPlayerInfo,
    客户端.GetConVar
本地 client_GetPlayerNameByIndex、client_GetPlayerNameByUserID、client_ChatTeamSay、client_AllowListener =
    client.GetPlayerNameByIndex,
    client.GetPlayerNameByUserID,
    client.ChatTeamSay,
    客户端.AllowListener
本地 globals_FrameTime，
    globals_AbsoluteFrameTime,
    globals_CurTime,
    globals_TickCount,
    globals_MaxClients,
    globals_RealTime,
    globals_FrameCount,
    globals_TickInterval =
    globals.FrameTime,
    globals.AbsoluteFrameTime,
    globals.CurTime,
    globals.TickCount,
    globals.MaxClients,
    globals.RealTime,
    globals.FrameCount,
    globals.TickInterval

本地 math_ceil，
    数学谭，
    数学巨大，
    math_log10,
    数学随机种子，
    数学余弦，
    math_sinh,
    数学_随机，
    数学模型，
    数学_pi，
    数学最大值，
    math_atan2,
    math_ldexp,
    数学楼层，
    数学平方，
    数学度，
    数学_atan =
    数学.ceil,
    数学.tan，
    数学巨大，
    数学.log10,
    数学.randomseed,
    数学.cos,
    数学.sinh,
    数学随机数，
    数学模型，
    数学.pi,
    数学.max,
    数学.atan2,
    数学.ldexp,
    数学地板，
    数学.sqrt,
    数学.deg,
    数学家
本地 math_fmod，
    数学_acos，
    math_pow,
    数学知识，
    数学分钟，
    数学日志，
    math_frex,
    数学罪，
    math_tanh,
    数学表达式，
    数学模型，
    数学科什，
    math_asin,
    math_rad =
    数学.fmod，
    数学.acos,
    数学.pow,
    数学.abs,
    数学分钟，
    数学日志，
    数学.frex,
    数学罪，
    数学.tanh，
    数学.exp,
    数学模型，
    数学.cosh，
    数学.asin,
    数学.rad
local table_foreach, table_sort, table_remove, table_foreach, table_maxn, table_getn, table_concat, table_insert =
    表.foreach，
    表格排序，
    表.删除，
    表.foreach，
    表.maxn，
    表.getn,
    表.concat，
    表.插入
本地 string_find，
    string_lower,
    字符串格式，
    字符串代表，
    string_gsub,
    string_len,
    字符串匹配，
    字符串转储，
    字符串匹配，
    string_reverse,
    字符串字节，
    字符串字符，
    string_upper，
    string_gfind,
    string_sub =
    string.find,
    string.lower,
    字符串格式，
    字符串.rep,
    字符串.gsub,
    字符串.len,
    字符串.gmatch,
    字符串转储，
    字符串匹配，
    string.reverse,
    字符串.字节，
    字符串.char,
    string.upper,
    string.gfind,
    字符串.sub



 font = draw.CreateFont("微软泰乐", 32, 1000);
 font1 = draw.CreateFont("宋体", 22, 400);
 Ind_font = draw.CreateFont("宋体", 15, 400);
 ref = gui.Reference("Ragebot");
 tab = gui.Tab(ref, "SemiRage", "[Nigga-SemiRage]");
本地 screen_w, screen_h = draw.GetScreenSize();
local updaterfont1 = draw.CreateFont("Bahnschrift", 15);
本地 baserotation = "rbot.antiaim.base.rotation"
local UserName=cheat.GetUserName()

local Font2 = draw.CreateFont("Marlett", 35, 700)
本地 current_damage
本地 b='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/';
    局部函数 decodeB64(data)
        data = string.gsub(data, '[^'..b..'=]', '')
        返回（数据：gsub（'。'，函数（x）
            if (x == '=') then return '' 结束
            局部 r,f='',(b:find(x)-1)
            对于 i=6,1,-1 do r=r..(f%2^if%2^(i-1)>0 and '1' or '0') 结束
            返回 r；
        结束):gsub('%d%d%d?%d?%d?%d?%d?%d?', 函数(x)
            if (#x ~= 8) then return '' 结束
            本地 c=0
            对于 i=1,8 执行 c=c+(x:sub(i,i)=='1' 和 2^(8-i) 或 0) 结束
                返回字符串.char(c)
        结尾））
    结尾;

 base64 = {
        字体图标 = [[
AAEAAAALAIAAAwAwT1MvMhJqDKYAAAC8AAAAYGNtYXDqMevRAAABHAAAAIRnYXNwAAAAEAAAAaAAAAAIZ2x5ZhcrBksAAAGoAACo3GhlYWQWzcvzAACqhAAAADZoaGVhEPcNrgAAqrwAAAAkaG10eLPqE2UAAKrgAAAA6GxvY2HNpp8oAACryAAAAHZtYXhwAEsCMQAArEAAAAAgbmFtZZlKCfsAAKxgAAABhnBvc3QAAwAAAACt6AAAACAAAwfaAZAABQAAApkCzAAAAI8CmQLMAAAB6wAzAQkAAAAAAAAAAAAAAAAAAAABEAAAAAAAAAAAAAAAAAAAAABAAADpMQPA/8AAQAPAAEAAAAABAAAAAAJxA1gAAAAgAAAAAAADAAAAAwAAABwAAQADAAAAHAADAAEAAAAcAAQAaAAAABYAEAADAAYAAQAgADMAVwBaAGcAeukK6TH//f//AAAAAAAgADEAQgBZAGEAaekK6TH//f//AAH/4//T/8X/xP++/70XLhcIAAMAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAQAB//8ADwABAAAAAAAAAAAAAgAANzkBAAAAAAEAAAAAAAAAAAACAAA3OQEAAAAABABUAEIH2wNAAQcBFAEnASoAAAE+ASc2FjM6ATM6AzMyNhceARcWNjMyFhceARUUBhcWBicqASMeARcWFBUWBiMqAScuAScmBhUUBhUUFhUUFhceARceAQcOAQcOAQcOAScuAScuAScuATU0JicuAScuATU0JjU0JicuATU0JicmBgcOAQcOAQcGJicOARUcARUUBiMiFgcGJiMqASMiNjUmNicmBiMGJicmNjU0Njc+ATc+ATc+ATc+AACkARwBmAIQAAAEWBg8HJy4BJy4BLwE1PwEXHgE/BRceARcWNj8CFxUHLgEnDwMOAScPARceARceARc/BjUnBx8BDwUvBDU3Mx4BPwQzHgEfAT8BMw8HMzczNx8GMx8BNTQmJy4BIwcCdwkJEiY2Ni8kDQcJOlwhGiULDAUHEho3HDImGAsMDSFJKhQrFgsJBXAtUCIFBx8qJU4oAgILCiMYHlQ2FyEmJjYkFAJVEgISGyIjIB1MNB8QBgQCFSoWJBsQBAMMGg0xKx0FzzUUEg4EBwIJCxsSDxUUDwUHC0wUFBsbCxgONgLFUpVDaV5BLRYMBAUoYjstaTpcSTQoCxAJBxkfHQ4fGzE1AwEKCwsFEgkkATAvBgciHRYFEiEtfThlLTdbIw8bJjRZY7oqJgs4dFxKOCsdFkFFRkE+VRANBwcRGRQJExsIFAMNOBAUHSYHBgMDAgIJDAYCBQIFBAsyRBAJCQIAAAAABABjAFoDfwMmAMMA0wDjAPYAAAEOAScuAScuAScmIgcOAQcGJicuAScuAQcOAQcOARceARceARUUFhcWMgcOAScuASceARceARceARceARceARUWFAcOAQcOAQcOASMGJicuAScuAScuAScuAScuAScuAScuAScuAScuAScuAScwNjc2MhceARceARceARcWMjc+ATc+ATc2JgcGJicuAScuAScmNjMyFhceARceARceARceARUeARceARceARceARcWNjc+ATc2FhceARceARceARcWBgclLgEnLgEHIhYXHgEXHgE3JyYGFx4BFx4BJy4BJy4BJzcuAScuASciBjMWMjMeATMyJicDegYNBwoVCCBDJBUnFRs+ATc0Njc2FhcWNjc+ATc2NBceARceATc+AScuAScoAQcOAScGFhceARceARceARcyNjc+ATc+AycOAQcGJiMChAEFAgECCgkPNiYKEwsKGAwJFgoGCgcPHgwuSjUgBgQECBk1HhwsFAwSCQgGAxUvIxIqFg4cDQoRCl4FBxovIwkVCwYQBhAeDTA2CQMEAgEBAQEBAhMDGzkVChIIBwgIFg0VJRcMFgcyTx0NIBEoWi8JChIURzQNGg4HDgcCBQEOHg03SSgLBgsVCgkXCgLMESERFSkVJkslO3IwDBoMCxQLCQ0HBQcDBhwKKWBsdD4xZjEQFAMEGxEJFAsKFwwgPBMLCgEIBQUFCGQzZ2JZJwoTBwQMBAsYDjF5RBkzGgcNBwEKAQEMAQoPEgoSCggFDA0XCA4GAQEMOAM4JxEeDB0SFkOIQUeBNQwXCgYKBQUBCxUMM36MlEgDBgMDAQAAAAUAWQAqCTADWgGjAcEB1AHkAgYAAAEeARUcARUUFhcWNjMWNhceAQcOAQcOAScOAQcGJhUUBgcGJicuAQcOAQcGFhcWBhUUBgcOAQcOAQcGJicuATc+ATc+AScuAScmBiMmBgcGJiM+ATUOAQcGJiMeARceAQcwBjEGFhceARceARcWBgcOAQcOAQcOAScuAScuAScuASc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zz1AAsEAAAAAADVPUO7AAAAANU9Q7sAAP/zDTUDjQAAAAgAAgAAAAAAAAABAAADwP/AAAANswAAAAANNQABAAAAAAAAAAAAAAAAAAAAOgQAAAAAAAAAAAAAAAhNAFQC5gBWBAAAYwMAAGcJswBZBU0AaQtNAGEIzQBWCDMAUAUAAGQHTQBYB+YAYwpNAFYLTQBcCoAAWQrNAFsJgABZAuYAZAYAAFsIzQBVCpoAUAmAAGYNswBjBU0AWwZNAE4IzQBVCrMAVwIaAFUJAABSCGYAUwjNAFQB5gBNDZoAXQtmAF0MGgBnBgAAbQLmAFMFAABYAgAAUQlNAFMITQBTA5oAYAoAAE8LGgBaCU0AUwVNAFQKmgBbBZoAYgjNAFMJgABlCM0AVQQAAGYIzQBbBoAAZwyAAFsAAAAAAoAFAGsAmYD2gS6B4AIUgoUDDoODA+WEUISwhPOFroZghtcHCgc3B50IMwi3CVMJtIoMCpqK2Qtii6aL9AxIjJYMrIzpDYUN+=AmYD2gS6B4AIUgoUDDoODA+WEUISwhPOFroZghtcHCgc3B50IMwi3CVMJtIoMCpqK2Qtii6aL9AxIjJYMrIzpDYUN+=AmYD2gS6B4AIUgoUDDoODA+WEUISwhPOFroZghtcHCgc3B50IMwi3CVMJtIoMCpqK2Qtii6aL9AxIjJYMrIzpDYUN+===AAEECQABAA4ABwADAAEECQACAA4AZwADAAEECQADAA4APQADAAEECQAEAA4AfAADAAEECQAFABYAIAADAAEECQAGAA4AUgADAAEECQAKADQApGljb21vb24AaQBjAG8AbQBvAG8AblZlcnNpb24gMS4wAFYAZQByAHMAaQBvAG4AIAAxAC4AMGljb21vb24AaQBjAG8AbQBvAG8Abmljb21vb24AaQBjAG8AbQBvAG8AblJlZ3VsYXIAUgBlAGcAdQBsAGEAcmljb21vb24AaQBjAG8AbQBvAG8AbkZvbnQgZ2VuZXJhdGVkIGJ5IEljb01vb24uAEYAbwBuAHQAIABnAGUAbgBlAHIAYQB0AGUAZAAgAGIAeQAgAEkAYwBvAE0AbwBvAG4ALgAAAAMAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA=AAEECQABAA4ABwADAAEECQACAA4AZwADAAEECQADAA4APQADAAEECQAEAA4AfAADAAEECQAFABYAIAADAAEECQAGAA4AUgADAAEECQAKADQApGljb21vb24AaQBjAG8AbQBvAG8AblZlcnNpb24gMS4wAFYAZQByAHMAaQBvAG4AIAAxAC4AMGljb21vb24AaQBjAG8AbQBvAG8Abmljb21vb24AaQBjAG8AbQBvAG8AblJlZ3VsYXIAUgBlAGcAdQBsAGEAcmljb21vb24AaQBjAG8AbQBvAG8AbkZvbnQgZ2VuZXJhdGVkIGJ5IEljb01vb24uAEYAbwBuAHQAIABnAGUAbgBlAHIAYQB0AGUAZAAgAGIAeQAgAEkAYwBvAE0AbwBvAG4ALgAAAAMAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA=AAAAAAAAAAAAAAAAAAAAAAAAAAAAA=AAAAAAAAAAAAAAAAAAAAAAAAAAAAA=
]]};
 FIcon = draw.AddFontResource(decodeB64(base64.fontIcon));
 FontIcon = draw.CreateFont("icomoon", 42)
 FontDefault = draw.CreateFont("宋体", 13)
 化解=假；
 种植时间 = 0；
 种植=假；
 炸弹站点=“？？？”；
 种植开始= 0；
 显示=假；
 应该拖动=假；
 mouseX, mouseY, PosX, PosY, dx, dy, w, h = 0, 0, 25, 525, 0, 0, 190, 60;
局部函数 lerp_pos(x1, y1, z1, x2, y2, z2, percentage)
 x = (x2 - x1) * 百分比 + x1
 y = (y2 - y1) * 百分比 + y1
 z = (z2 - z1) * 百分比 + z1
返回 x, y, z
结尾
本地函数站点名称（站点）
 avec = entities.GetPlayerResources():GetProp("m_bombsiteCenterA")
 bvec = entities.GetPlayerResources():GetProp("m_bombsiteCenterB")
 sitevec1 = 站点：GetMins()
 sitevec2 = 站点：GetMaxs()
 site_x, site_y, site_z = lerp_pos(sitevec1.x, sitevec1.y, sitevec1.z, sitevec2.x, sitevec2.y, sitevec2.z, 0.5)
 distance_a, distance_b = vector.Distance({site_x, site_y, site_z}, {avec.x, avec.y, avec.z}), vector.Distance({site_x, site_y, site_z}, {bvec.x, bvec. y, bvec.z})
返回 distance_b > distance_a 和“A”或“B”
结尾

函数 EventHook(事件)
如果 Event:GetName() == "bomb_beginplant" 那么
显示=真
plantingStarted = globals.CurTime()
炸弹站点 = 站点名称（实体。GetByIndex（事件：GetInt（“站点”）））
种植 = 真
结尾
如果 Event:GetName() == "bomb_abortplant" 那么
显示=假
种植=假
结尾
如果 Event:GetName() == "bomb_begindefuse" 那么
化解=真
elseif Event:GetName() == "bomb_abortdefuse" 那么
化解=假
elseif Event:GetName() == "round_officially_ended" 或 Event:GetName() == "bomb_defused" 或 Event:GetName() == "bomb_exploded" 那么
显示=假
化解=假
种植=假
结尾
如果 Event:GetName() == "bomb_planted" 那么
plantedat = globals.CurTime()
种植=假
结尾	
结尾

局部函数 dragFeature()
如果 input.IsButtonDown(1) 那么
mouseX, mouseY = input.GetMousePos();
如果 shouldDrag 那么
PosX = mouseX - dx;
PosY = 鼠标 Y - dy；
结尾
如果 mouseX >= PosX 且 mouseX <= PosX + w 且 mouseY >= PosY 且 mouseY <= PosY + 40 则
应该拖动=真；
dx = mouseX - PosX;
dy = mouseY - PosY;
结尾
别的
应该拖动=假；
结尾
结尾

功能渲染（）
    如果 bomb:GetValue() ~= true 则返回 end
如果显示或 gui.Reference('Menu'):IsActive() 那么



 绘制颜色（0,0,0,200）；
draw.RoundedRectFill(PosX-5,PosY-5,PosX+165,PosY+35,1)
draw.Color(bomb_col:GetValue());
draw.SetFont(字体图标)
draw.Text(PosX-3,PosY+14,"y")
draw.SetFont（字体默认）
绘制颜色（255,255,255,255）；

draw.Text(PosX+40,PosY+3,"站点:")
draw.Text(PosX+90,PosY+3,"时间:")
draw.Text(PosX+40,PosY+17,"伤害:")
draw.Color(bomb_col2:GetValue());
draw.RoundedRectFill(PosX-5,PosY-4,PosX+165,PosY-5,1)
绘制颜色（0,0,0,200）；
draw.RoundedRectFill(PosX-5,PosY-30,PosX+165,PosY-5,1)
draw.SetFont(字体1)
绘制颜色（255,255,255,255）；
draw.Text(PosX+15,PosY-25,"NiggaFish.lua")

draw.SetFont（字体默认）
--诱饵nn
如果种植 == true 那么
 PlantTime = math.floor((((plantingStarted - globals.CurTime()) + 3.125) * 10)) / 10
PlantTime = tostring(PlantTime)
如果不是 string.find(PlantTime, "%.") 那么
PlantTime = PlantTime .. ".0"
结尾
绘制颜色（0,0,0,200）；
draw.RoundedRectFill(PosX-5,PosY+35,PosX+165,PosY+55,1)
draw.SetFont(字体1)
绘制颜色（255,0,0,255）
draw.Text(PosX+30, PosY+35, “种植”.. 炸弹现场)
draw.SetFont（字体默认）
结尾
如果 entities.FindByClass("CPlantedC4")[1] ~= nil 那么
 炸弹 = entities.FindByClass("CPlantedC4")[1];
如果 Bomb:GetProp("m_bBombTicking") 和 Bomb:GetProp("m_bBombDefused") == 0 和 globals.CurTime() < Bomb:GetProp("m_flC4Blow") 那么
 bombtimer = math.floor((plantedat - globals.CurTime() + Bomb:GetProp("m_flTimerLength")) * 10) / 10	
如果 bombtimer < 0 那么 bombtimer = 0.0 结束
如果化解 == true 那么
绘制颜色（2,123,253,255）
draw.Text(PosX+70, PosY+3, 炸弹点)
如果 bombtimer < 5 那么
绘制颜色（252,3,23,255）；
elseif 炸弹计时器 < 10 然后
绘制颜色（252,117,23）；
别的
绘制颜色（2,123,253,255）；
结尾
炸弹计时器 = tostring(炸弹计时器)
如果不是 string.find(bombtimer, "%.") 那么
炸弹计时器 = 炸弹计时器 .. ".0"
结尾
draw.Text(PosX+125, PosY+4, bombtimer .. "s")
绘制颜色（23,114,69,255）；
如果炸弹：GetProp（“m_flDefuseCountDown”）>炸弹：GetProp（“m_flC4Blow”）然后
draw.Color(255, 0, 0, 255);
结尾
local defusetime = math.floor( (Bomb:GetProp("m_flDefuseCountDown") - globals.CurTime()) * 10 ) / 10
defusetime = tostring(defusetime)

绘制颜色（0,0,0,200）；
draw.RoundedRectFill(PosX-5,PosY+35,PosX+165,PosY+55,1)
绘制颜色（23,114,69,255）；
如果炸弹：GetProp（“m_flDefuseCountDown”）>炸弹：GetProp（“m_flC4Blow”）然后
draw.Color(255, 0, 0, 255);
结尾
如果不是 string.find(defusetime, "%.") 那么
defusetime = defusetime .. ".0"
结尾
draw.SetFont(字体1)

draw.Text(PosX+115, PosY+35,defusetime .. "s")
绘制颜色（255,255,255,255）
draw.Text(PosX+15, PosY+35, "化解：")
draw.SetFont（字体默认）
别的
绘制颜色（2,123,253,255）
draw.Text(PosX+70, PosY+3, 炸弹点)				
如果 bombtimer < 5 那么
draw.Color(240, 20, 0, 255);
elseif 炸弹计时器 < 10 然后
draw.Color(210, 150, 0, 255);
别的
绘制颜色（2,123,253,255）；
结尾
炸弹计时器 = tostring(炸弹计时器)
如果不是 string.find(bombtimer, "%.") 那么
炸弹计时器 = 炸弹计时器 .. ".0"
结尾
draw.Text(PosX+125, PosY+4, bombtimer .. "s")
结尾
 Player = entities.GetLocalPlayer();
如果 Player:IsAlive() 和 globals.CurTime() < Bomb:GetProp("m_flC4Blow") 那么		
local hpleft = math.floor(0.5 + BombDamage(Bomb, Player))
如果 hpleft >= Player:GetHealth() 那么
绘制颜色（252,3,23,255）
draw.Text(PosX+93,PosY+17,"100")
elseif hpleft <= 0 然后返回
别的
绘制颜色（252,117,23,255）
draw.Text(PosX+93,PosY+17,hpleft)
结尾
结尾
elseif Bomb:GetProp("m_bBombTicking") 和 Bomb:GetProp("m_bBombDefused") == 0 和 globals.CurTime() < (Bomb:GetProp("m_flC4Blow") + 2) 然后
 Player = entities.GetLocalPlayer();
如果 Player:IsAlive() 和 globals.CurTime() < (Bomb:GetProp("m_flC4Blow") + 1) 那么
 hpleft = math.floor(0.5 + BombDamage(Bomb, Player))
如果 hpleft >= Player:GetHealth() 那么
绘制颜色（252,3,23,255）
draw.Text(PosX+93,PosY+17,"100")
elseif hpleft <= 0 然后返回
别的
绘制颜色（252,117,23,255）
draw.Text(PosX+93,PosY+17,hpleft)					
结尾
结尾
结尾
结尾
结尾

拖动功能（）；
结尾

功能炸弹伤害（炸弹，玩家）
 playerOrigin = 玩家:GetAbsOrigin()
 bombOrigin = 炸弹:GetAbsOrigin()
 C4Distance = math.sqrt((bombOrigin.x - playerOrigin.x) ^ 2 +
(bombOrigin.y - playerOrigin.y) ^ 2 +
(bombOrigin.z - playerOrigin.z) ^ 2);
 高斯 = (C4Distance - 75.68) / 789.2
 flDamage = 450.7 * math.exp(-Gauss * Gauss)
如果 Player:GetProp("m_ArmorValue") > 0 那么
 flArmorRatio = 0.5;
 flArmorBonus = 0.5;
如果 Player:GetProp("m_ArmorValue") > 0 那么	
 flNew = flDamage * flArmorRatio;
 flArmor = (flDamage - flNew) * flArmorBonus;
如果 flArmor > Player:GetProp("m_ArmorValue") 那么
flArmor = Player:GetProp("m_ArmorValue") * (1 / flArmorBonus);
flNew = flDamage - flArmor;
结尾			 
flDamage = flNew;
结尾
结尾
返回 math.max(flDamage, 0);
结尾





本地 ffi = ffi
局部函数 a(b, c, d, e)
    local f = gui.Reference("菜单")
    返回（函数（）
        本地 g = {}
        局部 h, i, j, k, l, m, n, o, p, q, r, s, t, u
        local v = {__index = {Drag = function(self, ...)
                    本地 w, x = self:GetValue()
                    局部 y, z = g.drag(w, x, ...)
                    如果 w ~= y 或 x ~= z 那么
                        自我：设置值（y，z）
                    结尾
                    返回 y, z
                结束，SetValue = function(self, w, x)
                    本地 p, q = draw.GetScreenSize()
                    self.x:SetValue(w / p * self.res)
                    self.y:SetValue(x / q * self.res)
                结束，GetValue = function(self)
                    本地 p, q = draw.GetScreenSize()
                    返回 math.floor(self.x:GetValue() / self.res * p), math.floor(self.y:GetValue() / self.res * q)
                结尾}}
        函数 g.new(x, A, B, C, D)
            本地 D = D 或 10000
            本地 p, q = draw.GetScreenSize()
            本地 A = A ~= "" and A .. "." 或
            local E = gui.Slider(x, A .. "x", "位置 x", B / p * D, 0, D)
            local F = gui.Slider(x, A .. "y", "位置 y", C / q * D, 0, D)
            E：设置不可见（真）
            F：设置不可见（真）
            返回 setmetatable({x = E, y = F, res = D}, v)
        结尾
        函数 g.drag(w, x, G, H, I)
            如果 globals.FrameCount() ~= h 那么
                我 = f:IsActive()
                l, m = j, k
                j, k = input.GetMousePos()
                o = n
                n = input.IsButtonDown(1) == true
                s = r
                r = {}
                你=吨
                t = 假
                p，q = draw.GetScreenSize()
            结尾
            如果我和 o ~= nil 那么
                如果（不是 o 或 u）和 n 和 l > w 和 m > x 和 l < w + G 和 m < x + H 那么
                    t = 真
                    w, x = w + j - l, x + k - m
                    如果不是我那么
                        w = math.max(0, math.min(p - G, w))
                        x = math.max(0, math.min(q - H, x))
                    结尾
                结尾
            结尾
            table.insert(r, {w, x, G, H})
            返回 w, x, G, H
        结尾
        返回 g
    结束)().new(b, c, d, e)
结尾
做
    ffi.cdef [[
    typedef void* (__cdecl* tCreateInterface)(const char* name, int* returnCode);
    void* GetProcAddress(void* hModule, const char* lpProcName);
    void* GetModuleHandleA(const char* lpModuleName);
    类型定义结构{
        uint8_t r；
        uint8_t克；
        uint8_t b；
        uint8_t一个；
    } color_struct_t;

    typedef void (*console_color_print)(const color_struct_t&, const char*, ...);

    typedef void* (__thiscall* get_client_entity_t)(void*, int);
    ]]
    函数 mem.CreateInterface(J, K)
        返回 ffi.cast("tCreateInterface", ffi.C.GetProcAddress(ffi.C.GetModuleHandleA(J), "CreateInterface"))(K, ffi.new("int*"))
    结尾
结尾
做
    本地 L =
        绘制.CreateTexture(
        common.RasterizeSVG(
            [[<defs><linearGradient id="b" x1="100%" y1="0%" x2="0%" y2="0%"><stop offset="0%" style="stop- color:rgb(255,255,255); stop-opacity:0" /><stop offset="100%" style="stop-color:rgb(255,255,255); stop-opacity:1" /></linearGradient></defs ><rect width="500" height="500" style="fill:url(#b)" /></svg>]]
        )
    )
    本地 M =
        绘制.CreateTexture(
        common.RasterizeSVG(
            [[<defs><linearGradient id="a" x1="0%" y1="100%" x2="0%" y2="0%"><stop offset="0%" style="stop- color:rgb(255,255,255); stop-opacity:0" /><stop offset="100%" style="stop-color:rgb(255,255,255); stop-opacity:1" /></linearGradient></defs ><rect width="500" height="500" style="fill:url(#a)" /></svg>]]
        )
    )
    函数 draw.FilledRectFade(N, O, P, Q, R)
        本地 S = R 和 L 或 M
        绘制.SetTexture(S)
        draw.FilledRect(math.floor(N), math.floor(O), math.floor(P), math.floor(Q))
        draw.SetTexture（无）
    结尾
结尾
做
    函数 math.clamp(T, U, V)
        返回 T > V 和 V 或 T < U 和 U 或 T
    结尾
结尾

local hit_groups = {“头”、“胸”、“胃”、“左臂”、“右臂”、“左腿”、“右腿”}

local ffi_log = ffi.cast("console_color_print", ffi.C.GetProcAddress(ffi.C.GetModuleHandleA("tier0.dll"), "?ConColorMsg@@YAXABVColor@@PBDZZ"))

local _SetTag = ffi.cast('int(__fastcall*)(const char*, const char*)', mem.FindPattern('engine.dll', '53 56 57 8B DA 8B F9 FF 15'))

本地 SetTag = function(v)
    如果 v ~= 最后那么
      _SetTag(v, v)
      最后 = v
    结尾
  结尾

函数 client.log(msg, ...)
    对于 k, v 成对 ({...}) 做
        msg = tostring(msg .. v)
    结尾
    ffi_log(ffi.new("color_struct_t"), msg .. "\n")
结尾

函数 client.color_log(r, g, b, msg, ...)
    对于 k, v 成对 ({...}) 做
        msg = tostring(msg .. v)
    结尾
    本地 clr = ffi.new("color_struct_t")
    clr.r, clr.g, clr.b, clr.a = r, g, b, 255
    ffi_log(clr, msg .. "\n")
结尾

本地 c_hud_chat =
    ffi.cast("unsigned long(__thiscall*)(void*, const char*)", mem.FindPattern("client.dll", "55 8B EC 53 8B 5D 08 56 57 8B F9 33 F6 39 77 28") )(
    ffi.cast("unsigned long**", ffi.cast("uintptr_t", mem.FindPattern("client.dll", "B9 ?? ?? ?? ?? E8 ?? ?? ?? ?? 8B 5D 08")) + 1)[0],
    “CHudChat”
)

local ffi_print_chat = ffi.cast("void(__cdecl*)(int, int, int, const char*, ...)", ffi.cast("void***", c_hud_chat)[0][27])

函数 client.PrintChat(msg)
    ffi_print_chat(c_hud_chat, 0, 0, " " .. msg)
结尾

函数以（文本，前缀）开头
    返回文本：查找（前缀，1，真）== 1
结尾


局部函数 on_player_hurt(Event)
结尾

全景.RunScript([[
        让 muteSomeoneUHate = (ent) => {
        让 xuid = GameStateAPI.GetPlayerXuidFromUserID(ent);
            如果 (GameStateAPI.IsXuidValid(xuid) && !GameStateAPI.IsFakePlayer(xuid) && !GameStateAPI.IsSelectedPlayerMuted(xuid)) {
                让 isMuted = GameStateAPI.IsSelectedPlayerMuted(xuid);;
                如果（已静音）返回；
                GameStateAPI.ToggleMute(xuid);
            }
        }
]])

全景.RunScript([[
    让 UnmuteSomeoneULike = (ent) => {
    让 xuid = GameStateAPI.GetPlayerXuidFromUserID(ent);
        如果 (GameStateAPI.IsXuidValid(xuid) && !GameStateAPI.IsFakePlayer(xuid) && !GameStateAPI.IsSelectedPlayerMuted(xuid)) {
            让 isMuted = GameStateAPI.IsSelectedPlayerMuted(xuid);
            如果（静音）
                GameStateAPI.ToggleMute(xuid);
        }
    }
]])

局部函数 mute_someone_you_hate(UserID)

    panorama.RunScript([[muteSomeoneUHate( ]] .. UserID .. [[);
                        var xuid = GameStateAPI.GetPlayerXuidFromUserID(]] .. 用户 ID .. [[)
                        var name = GameStateAPI.GetPlayerName(xuid);
                        $.Msg("静音: " + name)]])

结尾

本地函数 unmute_someone_you_love_like_yukine(UserID)

    全景.RunScript([[
        $.Msg("运行 UnmuteFunc")
        UnmuteSomeoneULike(]] .. 用户 ID .. [[];
    ]])

结尾

局部函数 unmute_all()

    全景.RunScript([[
        (函数 a() {
            让 xuid = GameStateAPI.GetPlayerXuidStringFromEntIndex(]].. index ..[[)
            让 isMuted = GameStateAPI.IsSelectedPlayerMuted(xuid)
            如果 (isMuted) GameStateAPI.ToggleMute(xuid)
        })()
    ]])

结尾
callbacks.Register("FireGameEvent", 函数(e)
    如果 e:GetName() ~= "player_team" 然后返回结束
    如果 e:GetInt("disconnect") == 1 然后返回结束
    本地索引 = entities.GetByUserID(e:GetInt("userid")):GetIndex()
    如果 index == client.GetLocalPlayerIndex() 那么
        local ent = entities.FindByClass("CCSPlayer")
        对于 k,v 成对（ent）做
            unmute_all(v:GetIndex())
        结尾
        返回
    结尾
    取消静音（索引）
结尾）
client.AllowListener("player_team")
局部函数 mute_all()

    全景.RunScript([[
        对于（var i = 0；i < 1000；i++）{
            $.Msg(i)
            静音某人 UHate(i)
        }
    ]])

结尾

本地 clantag_speed = 3

局部函数 print_user_id()

    本地玩家 = entities.FindByClass("CCSPlayer");

    对于 i = 1，#players do

        本地玩家=玩家[i]；

        本地信息 = client.GetPlayerInfo(player:GetIndex())

        client.PrintChat(string.format( "用户名: %s -> UserID: %s", player:GetName(), info["UserID"]))
        
    结尾


结尾

局部函数 round(num, numDecimalPlaces)

	local mult = 10 ^ (numDecimalPlaces 或 0)

	返回 math.floor(num * mult + 0.5) / mult

结尾

本地 last_update_time = 0

本地迭代器 = 1

本地 clantag_set = ""

本地 clantag_type = ""

本地 clantag_str = ""

局部函数 do_clantag(clantag, style)

    如果 clantag == nil 或 clantag == "" 则返回 end

    
    本地 clantag_len = string.len(clantag)

    本地 cur_time = round(globals.CurTime() * clantag_speed, 0)



    如果 cur_time == last_update_time 然后返回结束



    如果样式 == "静态" 那么

        clantag_set = clantag

    elseif style == "Build" 然后

       

        如果 cur_time % clantag_len == 0 那么

            迭代器 = 1

        结尾



     

        clantag_set = ""



        对于 i = 1，iter do

            clantag_set = clantag_set .. clantag:sub(i, i)

            打印（clantag_set）

        结尾



   
        迭代器 = 迭代器 + 1

    elseif style == "滚动" then

 

        如果 cur_time % clantag_len == 0 那么

            clantag_set = clantag .. " "

        结尾



    

        如果 clantag_set:len() > 0 那么

            clantag_set = clantag_set .. clantag_set:sub(1, 1)

            clantag_set = clantag_set:sub(2, clantag_set:len())

        结尾

    elseif style == "Build-Scroll" 那么

   

        如果 cur_time % (clantag_len * 3 + 1) == 0 那么

            迭代器 = 1

        结尾

    

 

        如果 iter <= clantag_len * 3 + 1 那么

            如果 iter <= clantag_len 那么

                clantag_set = string.sub(clantag, 1, iter)

            elseif iter >= (clantag_len * 2) 然后

                clantag_set = string.sub(clantag, iter - clantag_len * 2 + 1, clantag_len)

            结尾

    

            迭代器 = 迭代器 + 1

        结尾

    结尾



    设置标签（clantag_set，clantag_set）



    last_update_time = round(globals.CurTime() * clantag_speed, 0)

结尾



局部函数 on_create_move(cmd)
 
    如果（clantag_type ==“”）然后clantag_type =“静态”结束

    do_clantag（clantag_str，clantag_type）
    
结尾

局部函数 set_animation(anim_type)

    如果(string.find(string.lower(anim_type), "static") == 1) 然后

        clantag_type = "静态"

        返回真

    elseif(string.find(string.lower(anim_type), "scroll") == 1) 然后

        clantag_type = "滚动"

        返回真

    elseif(string.find(string.lower(anim_type), "build") == 1) 然后

        clantag_type = "构建"

        返回真

    elseif(string.find(string.lower(anim_type), "build-scroll") == 1) 然后

        clantag_type = "构建卷轴"

        返回真

    结尾

结尾

局部函数 on_cmd(cmd)

    if(string.find(cmd:Get(), 'say "!') == 1) 然后

        如果（cmd：Get（）=='说“！帮助”'）然后

            client.PrintChat("\02[NiggaFish.lua]\08 !clantag Clantag 你要设置即 !clantag NiggaFish.lau")

            client.PrintChat("\02[NiggaFish.lua]\08 !animation static/scroll/build/build-scroll")

            client.PrintChat("\02[NiggaFish.lua]\08 !clantag_speed 3")

            client.PrintChat("\02[NiggaFish.lua]\08 !name Name 你要设置的 ie !name NiggaFish")

            client.PrintChat("\02[NiggaFish.lua]\08 !consolecommand ie !disconnect")

            client.PrintChat("\02[NiggaFish.lua]\08 !mute UID 即 !mute 3 使用 !list 查找 UID")

            client.PrintChat("\02[NiggaFish.lua]\08 !muteall UID ie !muteall 让所有人静音")

            client.PrintChat("\02[NiggaFish.lua]\08 !unmute UID 即 !unmute 3 使用 !list 查找 UID（不工作？）"）

            client.PrintChat("\02[NiggaFish.lua]\08 !list 打印玩家名称和他们的 UID")

        elseif(cmd:Get() == '说 "!todo"') 然后

            client.PrintChat("\02[待办事项]\08 !unmuteall")

            client.PrintChat("\02[待办事项]\08 !muteall")

            client.PrintChat("\02[To-do]\08 !clantag 打印子目录")

        elseif(string.find(cmd:Get(), 'say "!clantag') == 1) 然后

            本地命令 = cmd:Get()

            local t = string.gsub(cmd:Get(), 'say "!clantag ', "")

            t = string.gsub(t, '"', "")

            client.PrintChat("\02[NiggaFish.lua]\08 设置 clantag: " .. t)

            clantag_str = t

        elseif(string.find(cmd:Get(), 'say "!unmuteall') == 1) 然后

            client.PrintChat("\02[NiggaFish.lua]\08 取消静音大家")

            取消静音（）

        elseif(string.find(cmd:Get(), 'say "!muteall') == 1) 然后

            client.PrintChat("\02[NiggaFish.lua]\08 静音所有人")

            全部静音（）

        elseif(string.find(cmd:Get(), 'say "!clantag_speed') == 1) 然后

            本地命令 = cmd:Get()

            local t = string.gsub(cmd:Get(), 'say "!clantag_speed ', "")

            t = string.gsub(t, '"', "")

            client.PrintChat("\02[NiggaFish.lua]\08 设置 clantag 速度：" .. t)

            clantag_speed = tonumber(t)

        elseif(string.find(cmd:Get(), 'say "!animation') == 1) 然后

            本地命令 = cmd:Get()

            local t = string.gsub(cmd:Get(), 'say "!animation ', "")

            t = string.gsub(t, '"', "")

            局部成功 = set_animation(t)

            if(sucess) then client.PrintChat("\02[NiggaFish.lua]\08 设置动画：" .. t) end

        elseif(string.find(cmd:Get(), 'say "!name') == 1) 然后

            本地命令 = cmd:Get()

            local t = string.gsub(cmd:Get(), 'say "!name ', "")

            t = string.gsub(t, '"', "")

            client.PrintChat("\02[NiggaFish.lua]\08 设置名称：" .. t)

            client.SetConVar("名称", t, 1)

        elseif(string.find(cmd:Get(), 'say "!mute') == 1) 然后

            本地命令 = cmd:Get()

            local t = string.gsub(cmd:Get(), 'say "!mute', "")

            t = string.gsub(t, '"', "")

            client.PrintChat("\02[NiggaFish.lua]\08 静音播放器 UID: " .. t)

            mute_someone_you_hate(t)

        elseif(string.find(cmd:Get(), 'say "!unmute') == 1) 然后

            本地命令 = cmd:Get()

            local t = string.gsub(cmd:Get(), 'say "!unmute', "")

            t = string.gsub(t, '"', "")

            client.PrintChat("\02[NiggaFish.lua]\08 使用 UID 取消静音播放器：" .. t)

            unmute_someone_you_love_like_yukine(t)

        elseif(string.find(cmd:Get(), 'say "!list') == 1) 然后

            print_user_id()

        别的

            本地命令 = cmd:Get()

            local t = string.gsub(cmd:Get(), 'say "!', "")

            t = string.gsub(t, '"', "")

            client.PrintChat("\02[NiggaFish.lua]\08 运行命令：" .. t)

            客户端命令（t，1）

        结尾

    结尾

结尾










 guiSet = gui.SetValue
 guiGet = gui.GetValue
 auto = guiGet("rbot.accuracy.weapon.asniper.mindmg")
 sniper = guiGet("rbot.accuracy.weapon.sniper.mindmg")
 pistol = guiGet("rbot.accuracy.weapon.pistol.mindmg")
 左轮手枪 = guiGet("rbot.accuracy.weapon.hpistol.mindmg")
 smg = guiGet("rbot.accuracy.weapon.smg.mindmg")
 rifle = guiGet("rbot.accuracy.weapon.rifle.mindmg")
 shotgun = guiGet("rbot.accuracy.weapon.shotgun.mindmg")
 scout = guiGet("rbot.accuracy.weapon.scout.mindmg")
 lmg = guiGet("rbot.accuracy.weapon.lmg.mindmg")

 guiSet = gui.SetValue
 guiGet = gui.GetValue
 togglekey = input.IsButtonDown
 切换=-1
 按下=假
 awp1 = 0
 侦察兵1 = 0
 自动 1 = 0
 hpistol1 = 0

--主要的狗屎
 main_box = gui.Groupbox(tab, "主", 16, 16, 200, 0);
 Ind = gui.Checkbox(main_box,"indicator", "主指标", false);
 Ind_col = gui.ColorPicker(Ind, "main.color", "Accent Color", 105,0,255, 255);
 Ind_col_2 = gui.ColorPicker(Ind, "main.color", "Accent Color", 20, 20, 20, 200);
 Ind2 = gui.Checkbox(main_box,"CrossHair", "Under CrossHair", true);
 Ind_col2 = gui.ColorPicker(Ind2, "main.color", "Accent Color", 105,0,255, 255);
 Ind_col2name = gui.ColorPicker(Ind2, "main.color", "Accent Color", 105,0,255, 255);
 anti_aim_arrow_cb = gui.Checkbox(main_box,"anti_aim_arrows", "Anti-Aim arrows", true);
 main_clr = gui.ColorPicker(anti_aim_arrow_cb, "main.color", "Accent Color", 105,0,255, 255);
 Y = gui.Checkbox(main_box, "so.watermark", "水印", 1)
 Z = gui.ColorPicker(Y, "clr", "颜色", 105,0,255, 255)
 X = gui.Checkbox(main_box, "so.rainbow", "Rainbow", 0)
 Team = gui.Checkbox(main_box,"TeamDamage", "TeamDamage", true);


 --视野
 Fov = gui.Groupbox(tab, "Fov", 232, 16, 200, 0);
 dynamic_enable = gui.Checkbox(Fov, "dynamic.enable", "Dynamic Fov Enable", true);
 dynamic_min_slider = gui.Slider(Fov, "dynamic.min", "Fov Min", 5, 1, 30);
 dynamic_max_slider = gui.Slider(Fov, "dynamic.max", "Fov Max", 10, 1, 30);



--swithers
 switch_box = gui.Groupbox(tab, "开关", 448, 16, 174, 0);
 switch_enable = gui.Checkbox(switch_box, "switch.enable", "Enable", true);
 switch_fbaim_key = gui.Keybox(switch_box, "switch.force", "Force Baim", 0);
 switch_awall_key = gui.Keybox(switch_box, "switch.autowall", "自动墙", 0);
 key = gui.Keybox(switch_box, "lua_keybox", "Rage/Legit",0);
 


--杂项
 misc_box = gui.Groupbox(tab, "杂项", 232, 266, 200, 0);
 EngineRadar = gui.Checkbox(misc_box, "engineradar", "Engine Radar", true)
 bomb = gui.Checkbox(misc_box, "炸弹", "炸弹 ", 1)
 bomb_col = gui.ColorPicker(bomb, "main.color", "Accent Color", 255,255,255, 255);
 bomb_col2 = gui.ColorPicker(bomb, "main.color", "Accent Color", 105,0,255, 255);
 main_unlockinv = gui.Checkbox(misc_box, "main.unlockinv", "解锁物品栏", true);
on = gui.Checkbox(misc_box, "showvote", "Vote Revealer", 1)
 Enable_Killsays = gui.Checkbox(misc_box, "enable.killsays", "启用 Killsay", false)
 Killsay_Mode = gui.Combobox(misc_box, "killsay.mode", "Select Killsay Mode", "NiggaFish.lua","AimWare.net")
  hudweapon_enable = gui.Checkbox(misc_box, "hudweapon.enabled", "记分牌", 真)
  menu = {filter = gui.Multibox(misc_box, "武器过滤器")}
  itemList = {"Primary", "Secondary", "Knife/Taser", "Grenades", "C4", "Defuser", "Armor", "Other"}
 对于索引，ipairs(itemList) 中的值做
     菜单 ["item_" .. index] = gui.Checkbox(menu.filter, "hudweapon.item_" .. index, value, false)
 结尾
  hudweapon_color = gui.ColorPicker(misc_box, "hudweapon.color", "模糊颜色", 105, 0, 255, 255)
  player_weapons = {}
 对于 i = 0, 64 做
     player_weapons[i] = {}
 结尾
 gui.Button(misc_box, "清除设备数据", function()
     对于 i = 0, 64 做
         player_weapons[i] = {}
     结尾
 结尾）




--clantag
 misc_box1 = gui.Groupbox(tab, "Clantag", 440, 266, 200, 0);
 EnableClantag=gui.Checkbox(misc_box1,"EnableClantag","Clantag",false)
 enable = gui.Checkbox(misc_box1,"customtagenable", "Custom clantag", 0)
 tagbox = gui.Editbox(misc_box1, "customtag", "Clantag name ")
 speedslider = gui.Slider(misc_box1, "customtagspeed", "Clantag speed", 3, 0, 10, 0.1)
 stealclan = gui.Combobox(misc_box1, "stealclan", "Steal Clan", "Off")


 --minoverride
  Min_box = gui.Groupbox(tab, "Min Override", 16, 266, 200, 0);

   togglekey = gui.Keybox(Min_box, "ChangeDmgKey", "Key", 0)
  setDmg = gui.Combobox(Min_box, "mindmgmode", "Key Mode", "Off", "Toggle", "Hold")
  awpori = gui.Slider(Min_box, "awpori", "Awp 原始最小伤害", 101, 0, 130)
  awpDamage = gui.Slider(Min_box, "awpDamage", "Awp 最小伤害", 5, 0, 130)
  
  qawpDamage = gui.Slider(Min_box, "", "", 0, 0, 0)
  scoutori = gui.Slider(Min_box, "scoutori", "Scout 原始最小伤害", 60, 0, 130)
  scoutDamage = gui.Slider(Min_box, "scoutDamage", "Scout Min Damage", 5, 0, 130)

  qawpDamage = gui.Slider(Min_box, "", "", 0, 0, 0)
  autoori = gui.Slider(Min_box, "autoori", "Auto Original Min Damage", 30, 0, 130)
  autoDamage = gui.Slider(Min_box, "autoDamage", "Auto Min Damage", 5, 0, 130)
 
  qawpDamage = gui.Slider(Min_box, "", "", 0, 0, 0)
  hpistolori = gui.Slider(Min_box, "hpistolori", "HeavyPistol Original Min Damage", 30, 0, 130)

  hpistolDamage = gui.Slider(Min_box, "hpistolDamage", "HeavyPistol Min Damage", 5, 0, 130)


 

 按下=假；
--------NiggaFish Killsay--------
 NiggaFish_killsays = {
    [1] = "NiggaFish.lua 是 AimWare.net 最好的 Lua",
    [2] = "OMFG 被 NiggaFish.lua 搞砸了",
    [3] = "NiggaFish 是 AimWare.net 论坛上的免费 Semi-Rage lua",
  }
  
  
  
  局部函数 NiggaFish_KillSay( Event )
    
   如果 ( Event:GetName() == 'player_death' ) and Enable_Killsays:GetValue() == true and Killsay_Mode:GetValue() == 0 then
        
        ME = client.GetLocalPlayerIndex();
       
        INT_UID = Event:GetInt( 'userid' );
        INT_ATTACKER = Event:GetInt( '攻击者' );
       
        NAME_Victim = client.GetPlayerNameByUserID( INT_UID );
        INDEX_Victim = client.GetPlayerIndexByUserID( INT_UID );
       
        NAME_Attacker = client.GetPlayerNameByUserID( INT_ATTACKER );
        INDEX_Attacker = client.GetPlayerIndexByUserID( INT_ATTACKER );
        
       如果（INDEX_Attacker == ME and INDEX_Victim ~= ME）那么
    
        随机 = math.random (1, 3)
        client.ChatSay( ' ' .. tostring( NiggaFish_killsays[随机]));
  

    结尾
  
  结尾
  
  结尾
  --------NiggaFish Killsay--------
 AimWare_KillSay = {
    [1] = "Get Good Get Aimware.net",
    [2] = "需要最好的秘籍吗？到 Aimware.net",
    [3] = "AimWare 论坛上的免费 Semi-Rage lua",
  }
  
  
  
  局部函数 AimWare_KillSay( Event )
    
   如果 ( Event:GetName() == 'player_death' ) and Enable_Killsays:GetValue() == true and Killsay_Mode:GetValue() == 1 then
        
        ME = client.GetLocalPlayerIndex();
       
        INT_UID = Event:GetInt( 'userid' );
        INT_ATTACKER = Event:GetInt( '攻击者' );
       
        NAME_Victim = client.GetPlayerNameByUserID( INT_UID );
        INDEX_Victim = client.GetPlayerIndexByUserID( INT_UID );
       
        NAME_Attacker = client.GetPlayerNameByUserID( INT_ATTACKER );
        INDEX_Attacker = client.GetPlayerIndexByUserID( INT_ATTACKER );
        
       如果（INDEX_Attacker == ME and INDEX_Victim ~= ME）那么
    
        随机 = math.random (1, 3)
        client.ChatSay( ' ' .. tostring( AimWare_KillSay[随机]));
  

    结尾
  
  结尾
  结尾


  本地击杀 = {}
  本地死亡 = {}
   
  局部函数 KillDeathCount(event)
   
      local local_player = client.GetLocalPlayerIndex();
      local INDEX_Attacker = client.GetPlayerIndexByUserID( event:GetInt( 'attacker' ) );
      local INDEX_Victim = client.GetPlayerIndexByUserID( event:GetInt( 'userid' ) );
   
      如果（事件：GetName（）==“client_disconnect”）或（事件：GetName（）==“begin_new_match”）然后
          杀死 = {}
          死亡 = {}
      结尾
   
      如果事件：GetName( ) == "player_death" 那么
          如果 INDEX_Attacker == local_player 那么
              杀死[#kills + 1] = {};
          结尾
   
          如果（INDEX_Victim == local_player）那么
              死亡[#deaths + 1] = {};
          结尾
   
      结尾
  结尾
  
  a1 = draw.CreateFont("verdana", 15)
 a2 = {水印 = 0, 观众 = 0}
 a3 = {

    水印=函数（）
         a4 = mem.FindPattern("engine.dll", "FF E1")
         a5 = ffi.cast("uint32_t(__fastcall*)(unsigned int, unsigned int, const char*)", a4)
         a6 = ffi.cast("uint32_t(__fastcall*)(unsigned int, unsigned int, uint32_t, const char*)", a4)
         a7 = ffi.cast("uint32_t**", ffi.cast("uint32_t", mem.FindPattern("engine.dll", "FF 15 ?? ?? ?? ?? A3 ?? ?? ?? ?? EB 05")) + 2)[0][0]
         a8 = ffi.cast("uint32_t**", ffi.cast("uint32_t", mem.FindPattern("engine.dll", "FF 15 ?? ?? ?? 85 C0 74 0B")) + 2 )[0][0]
         a9 = 函数(aa, ab, ac)
             ad = ffi.typeof(ac)
            返回函数（...）
                返回 ffi.cast(ad, a4)(a6(a7, 0, a5(a8, 0, aa), ab), 0, ...)
            结尾
        结尾
         ae = a9("user32.dll", "EnumDisplaySettingsA", "int(__fastcall*)(unsigned int, unsigned int, unsigned int, unsigned long, void*)")
         af = ffi.new("struct { char pad_0[120]; unsigned long dmDisplayFrequency; char pad_2[32]; }[1]")
        ae(0, 4294967295, af[0])
        
    结尾，
   d
 
}
a3.水印()

 aspect_table = {0, 2.0, 1.9, 1.8, 1.7, 1.6, 1.5, 1.4, 1.3, 1.2, 1.1, 1.0, 0.9, 0.8, 0.7, 0.6, 0.5, 0.4, 0.3};
 weapons_table = {"asniper", "hpistol", "lmg", "pistol", "rifle", "scout", "smg", "shotgun", "sniper", "zeus",
                       “共享”};
 aa_side = false;
 switch_fbaim = false;
 switch_awall = false;
 fakeducking = 假;
 时间 = 0.0；

 c_hud_chat =
    ffi.cast("unsigned long(__thiscall*)(void*, const char*)", mem.FindPattern("client.dll", "55 8B EC 53 8B 5D 08 56 57 8B F9 33 F6 39 77 28") )(
    ffi.cast("unsigned long**", ffi.cast("uintptr_t", mem.FindPattern("client.dll", "B9 ?? ?? ?? ?? E8 ?? ?? ?? ?? 8B 5D 08")) + 1)[0],
    “CHudChat”
)

 ffi_print_chat = ffi.cast("void(__cdecl*)(int, int, int, const char*, ...)", ffi.cast("void***", c_hud_chat)[0][27])

函数 client.PrintChat(msg)
    ffi_print_chat(c_hud_chat, 0, 0, " " .. msg)
结尾

 vote_print_chat =
    （功能（）


   

结尾）（）

本地函数 get_name(localplayer)
    如果是本地播放器
        local lp_index = client_GetLocalPlayerIndex()
        本地 n = client_GetPlayerNameByIndex(lp_index)
        返回 n
    别的
        本地 n = client_GetConVar("名称")
        返回 n
    结尾
结尾
本地名称 = get_name(模式)
局部函数 rect(x, y, w, h, col)
    draw.Color(col[1], col[2], col[3], col[4]);
    draw.FilledRect(x, y, x + w, y + h);
结尾




local set_clan_tag = ffi.cast("int(__fastcall*)(const char*)", mem.FindPattern("engine.dll", "53 56 57 8B DA 8B F9 FF 15"))
local SetClantag= ffi.cast('int(__fastcall*)(const char*, const char*)', mem.FindPattern('engine.dll', '53 56 57 8B DA 8B F9 FF 15'))
函数 client.SetClanTag(...)
    当地氏族=“”

    对于 k, v 成对 ({...}) 做
        氏族= tostring（氏族.. v）
    结尾

    set_clan_tag（氏族）
结尾
本地动画={
    " ",
    "NiggaFish.lua",
    "NiggaFish.lu",
    "NiggaFish.l",
    “黑鬼鱼。”,
    “黑鱼”，
    “黑鬼菲斯”，
    “黑鬼”，
    “黑鬼”，
    “黑鬼”，
    “尼格”，
    “尼格”，
    “你 ”，
    “否”，

    “否”，
    “你 ”，
    “尼格”，
    “尼格”，
    “黑鬼”，
    “黑鬼”，
    “黑鬼”，
    “黑鬼菲斯”，
    “黑鱼”，
    “黑鬼鱼。”,
    "NiggaFish.l",
    "NiggaFish.lu",
    "NiggaFish.lua",
    " ",
    
}
函数 Clantag()
	如果 EnableClantag:GetValue() 那么
		本地 CurTime = math.floor(globals.CurTime() * 2.3);
    	如果 OldTime ~= CurTime 那么
    	    SetClantag(动画[CurTime % #animation+1], 动画[CurTime % #animation+1]);
    	结尾
    	旧时间 = 当前时间；
		clantagset = 1;
	别的
		如果 clantagset == 1 那么
            clantagset = 0;
            SetClantag("", "");
        结尾
	结尾
结尾
本地最后 = 无
本地标签 = " "
本地 lasttag = 无
局部标签步数 = {}
本地 SetTag = function(v)
    如果 v ~= 最后那么
        SetClantag(v, "")
      最后 = v
    结尾
  结尾
  
  局部函数 makesteps()
    tagsteps = {" "}
  
    对于 i = 1，#tag do
      table.insert(tagsteps, tag:sub(1, i))
    结尾
  
    因为我 = #tagsteps - 1, 1, -1 做
      table.insert(tagsteps, tagsteps[i])
    结尾
  结尾
  
  局部函数 monkey()
    如果启用：GetValue() 那么
      gui.SetValue("misc.clantag", false)
      标签 = 标签框:GetValue()
      if tag:match("gamesense") then tag = "retard" 结束
      如果 lasttag ~= tag 那么
        迈步（）
        lasttag = 标签
      结尾
      如果 speedslider:GetValue() == 0 那么
        设置标签（标签）
      别的
        SetTag(tagsteps[math.floor(globals.TickCount()/((11-speedslider:GetValue())*3.5))%(#tagsteps-1)+1])
      结尾
    别的
      设置标签（“”）
    结尾
  结尾
  




--minover
函数 changeMinDamage()
 
      
    如果 (setDmg:GetValue()==1) 那么
            如果 input.IsButtonPressed(togglekey:GetValue()) 那么
                按下=真；
    切换 = 切换 *-1
    
            elseif（按下并输入。IsButtonReleased（togglekey：GetValue（）））然后
                按下=假；
    
                如果 Toggle == 1 那么
                guiSet("rbot.accuracy.weapon.sniper.mindmg", awp1)
                guiSet("rbot.accuracy.weapon.scout.mindmg", scout1)
                guiSet("rbot.accuracy.weapon.asniper.mindmg", auto1)
                guiSet("rbot.accuracy.weapon.hpistol.mindmg", hpistol1)
                别的
            guiSet("rbot.accuracy.weapon.asniper.mindmg", autoori:GetValue())
            guiSet("rbot.accuracy.weapon.sniper.mindmg", awpori:GetValue())
            guiSet("rbot.accuracy.weapon.scout.mindmg", scoutori:GetValue())
            guiSet("rbot.accuracy.weapon.hpistol.mindmg", hpistolori:GetValue())
    
                结尾
            结尾
        elseif (setDmg:GetValue()==2) 然后
            如果 input.IsButtonDown(togglekey:GetValue()) 那么
                guiSet("rbot.accuracy.weapon.sniper.mindmg", awp1)
                guiSet("rbot.accuracy.weapon.scout.mindmg", scout1)
                guiSet("rbot.accuracy.weapon.asniper.mindmg", auto1)
                guiSet("rbot.accuracy.weapon.hpistol.mindmg", hpistol1)
            别的
            guiSet("rbot.accuracy.weapon.asniper.mindmg", autoori:GetValue())
            guiSet("rbot.accuracy.weapon.sniper.mindmg", awpori:GetValue())
            guiSet("rbot.accuracy.weapon.scout.mindmg", scoutori:GetValue())
            guiSet("rbot.accuracy.weapon.hpistol.mindmg", hpistolori:GetValue())
            结尾
        elseif (setDmg:GetValue()==0) 那么
            切换 = -1
            guiSet("rbot.accuracy.weapon.asniper.mindmg", autoori:GetValue())
            guiSet("rbot.accuracy.weapon.sniper.mindmg", awpori:GetValue())
            guiSet("rbot.accuracy.weapon.scout.mindmg", scoutori:GetValue())
            guiSet("rbot.accuracy.weapon.hpistol.mindmg", hpistolori:GetValue())
        结尾
    结尾
    
--minend

局部函数 gradient_h(x1, y1, x2, y2, col1, left)
    本地 w = x2 - x1；
    本地 h = y2 - y1；

    对于 i = 0，w 做
        局部 a = (i / w) * 200;
        局部 r, g, b = col1[1], col1[2], col1[3];
        draw.Color(r, g, b, a);
        如果离开的话
            draw.FilledRect(x1 + i, y1, x1 + i + 1, y1 + h);
        别的
            draw.FilledRect(x1 + w - i, y1, x1 + w - i + 1, y1 + h);
        结尾
    结尾
结尾

局部函数 gradient_v(x, y, w, h, col1, col2, down)
    rect(x, y, w, h, col1);

    局部 r, g, b = col2[1], col2[2], col2[3];

    对于 i = 1，h 做
        本地 a = i / h * 255；
        如果下来那么
            rect(x, y + i, w, 1, {r, g, b, a});
        别的
            rect(x, y - i, w, 1, {r, g, b, a});
        结尾
    结尾
结尾

本地功能检查（选项）
    如果不是选项：GetValue() 那么
        返回假；
    结尾
    如果不是 gui.GetValue("rbot.master") 那么
        返回假；
    结尾
    本地 lc = entities.GetLocalPlayer();
    如果不是 lc 或不是 lc:IsAlive() 那么
        返回假；
    结尾
    返回真；
结尾

局部函数 get_weapon_class(lp)
    本地 weapon_id = lp:GetWeaponID();

    如果 weapon_id == 11 或 weapon_id == 38 那么
        返回“狙击手”；
    elseif weapon_id == 1 或 weapon_id == 64 那么
        返回“hpistol”；
    elseif weapon_id == 14 或 weapon_id == 28 然后
        返回“lmg”；
    elseif weapon_id == 2 or weapon_id == 3 or weapon_id == 4 or weapon_id == 30 or weapon_id == 32 or weapon_id == 36 or weapon_id == 61 or weapon_id == 63 then
        返回“手枪”；
    elseif weapon_id == 7 or weapon_id == 8 or weapon_id == 10 or weapon_id == 13 or weapon_id == 16 or weapon_id == 39 or weapon_id == 60 then
        返回“步枪”；
    elseif weapon_id == 40 那么
        返回“侦察兵”；
    elseif weapon_id == 17 or weapon_id == 19 or weapon_id == 23 or weapon_id == 24 or weapon_id == 26 or weapon_id == 33 or weapon_id == 34 then
        返回“smg”；
    elseif weapon_id == 25 or weapon_id == 27 or weapon_id == 29 or weapon_id == 35 then
        返回“霰弹枪”；
    elseif weapon_id == 9 那么
        返回“狙击手”；
    elseif weapon_id == 31 那么
        返回“宙斯”；
    结尾

    返回“共享”；
结尾


函数梯度（x1，y1，x2，y2，左）
    本地 w = x2 - x1
    本地 h = y2 - y1
 
    对于 i = 0，w 做
        本地 a = (i / w) * 200
 
        绘制颜色（0、0、0、a）
        如果离开的话
            draw.FilledRect(x1 + i, y1, x1 + i + 1, y1 + h)
        别的
            draw.FilledRect(x1 + w - i, y1, x1 + w - i + 1, y1 + h)
        结尾
    结尾
结尾
局部函数动态（）
    如果不检查（dynamic_enable）然后
        返回;
    结尾

    如果 dynamic_min_slider:GetValue() > dynamic_max_slider:GetValue() 那么
        返回;
    结尾

    如果 math.abs(globals.CurTime() - 时间) > 1 那么
        gui.SetValue("rbot.aim.target.fov", math.random(dynamic_min_slider:GetValue(), dynamic_max_slider:GetValue()));
        时间 = globals.CurTime();
    结尾
结尾

局部函数开关()
	如果 Ind:GetValue() ~= true 则返回结束
    本地 lc = entities.GetLocalPlayer();
      如果 lc 和 lc:IsAlive() 那么
     局部 x, y = draw.GetScreenSize()
     局部中心 X = x / 2
  
 -- 如果 Ind2:GetValue() ~= true 则返回结束
     
    - 左边
     渐变（centerX - 450，y - 20，centerX - 301，y，0，真）
     渐变（centerX - 450，y - 20，centerX - 301，y - 19，真）
 
     渐变（centerX - 450，y - 20，centerX - 301，y，0，真）
     
 
 
    绘制颜色（0、0、0、255）
     draw.FilledRect(centerX -300, y - 20, centerX + 300, y)
  
      绘制颜色（0、0、0、255）
     draw.FilledRect(centerX - 50, y - 20, centerX + 50, y - 19)
 
  绘制颜色（0、0、0、200）
  draw.FilledRect(centerX - 50, y - 40, centerX + 50, y)
 

 
  - 正确的
     渐变（centerX + 300，y - 20，centerX + 431，y，false）
     渐变（centerX + 400，y - 20，centerX + 331，y - 19，false）
    渐变（centerX + 300，y - 20，centerX + 431，y，false）

  - 顶部
     渐变（centerX + 50，y - 40，centerX + 100，y - 19，false）
     渐变（centerX - 100，y - 40，centerX - 51，y - 19，真）
     绘制颜色（0、0、0、255）
     draw.FilledRect(centerX - 50, y - 40, centerX + 50, y - 19)
    
       draw.SetFont(Ind_font);
       绘制颜色（255、255、255、255）
       draw.Text(centerX - 40, y - 35, "Nigga .lua")
       draw.Color(Ind_col:GetValue());
       draw.Text(centerX - 5, y - 35, "鱼")
        绘制颜色（255、255、255、255）；
        draw.Text(screen_w / 2 -351, screen_h / 2+525, "Fov:");
        draw.Text(screen_w / 2 - 295, screen_h / 2 + 525, "DMG:");
        draw.Text(screen_w / 2 - 235, screen_h / 2 + 525, "精度:");
        draw.Text(screen_w / 2 - 135, screen_h / 2 + 525, "Awall:");
        draw.Text(screen_w / 2 - 70, screen_h / 2 + 525, "Baim:");
        draw.Text(screen_w / 2 - 0, screen_h / 2 + 525, "解析器:");

        draw.Color(0, 255, 0, 255);
        draw.Text(screen_w / 2 - 323, screen_h / 2+525, gui.GetValue("rbot.aim.target.fov","°"));
        draw.Color(0, 255, 0, 255);
        draw.Text(screen_w / 2 - 263, screen_h / 2 + 525, gui.GetValue("rbot.accuracy.weapon." .. get_weapon_class(lc) .. ".mindmg"));
        如果 (gui.GetValue("rbot.master") == true ) 和 (gui.GetValue("rbot.aim.enable") == true) 然后
            onoroff = "愤怒"
            绘制颜色(0, 255, 0, 255)
            draw.Text(screen_w / 2 - 393, screen_h / 2 + 525, onoroff)     
            别的
            onoroff = "愤怒"
            绘制颜色(255, 0, 0, 255)
            draw.Text(screen_w / 2 - 393, screen_h / 2 + 525, onoroff)     
            
        结尾

       如果 switch_awall 那么
            draw.Color(0, 255, 0, 255);
            draw.Text(screen_w / 2 - 95, screen_h / 2 + 525, "ON");
        别的
            draw.Color(255, 0, 0, 255);
            draw.Text(screen_w / 2 - 95, screen_h / 2 + 525, "OFF");
        结尾

        如果 switch_fbaim 那么
            draw.Color(0, 255, 0, 255);
            draw.Text(screen_w / 2 - 30, screen_h / 2 + 525, "ON");
        别的
            draw.Color(255, 0, 0, 255);
            draw.Text(screen_w / 2 - 30, screen_h / 2 + 525, "OFF");
        结尾

        如果 gui.GetValue("rbot.accuracy.posadj.resolver") 那么
            draw.Color(0, 255, 0, 255);
            draw.Text(screen_w / 2 + 60, screen_h / 2 + 525, "ON");
        别的
            draw.Color(255, 0, 0, 255);
            draw.Text(screen_w / 2 + 60, screen_h / 2 + 525, "OFF");
        结尾

        局部精度 = 100 - math.floor(entities.GetLocalPlayer():GetWeaponInaccuracy() * 10 ^ 3 + 0.5) / 10 ^ 3 * 100;

        如果准确度 > 90 那么
            draw.Color(0, 255, 0, 255);
            draw.Text(screen_w / 2 - 170, screen_h / 2 + 525, “高”);
        别的
            draw.Color(255, 0, 0, 255);
            draw.Text(screen_w / 2 - 170, screen_h / 2 + 525, "低");
        结尾

        
   结尾
 
    如果不检查（switch_enable）那么
        返回;
    结尾

    如果 switch_fbaim_key:GetValue() ~= 0 那么
        如果 input.IsButtonPressed(switch_fbaim_key:GetValue()) 那么
            如果不是 switch_fbaim 那么
                for i, v in next, weapons_table 做
                    gui.SetValue("rbot.hitscan.mode." .. v .. ".bodyaim.force", 1);
                结尾
                switch_fbaim = 真；
            别的
                for i, v in next, weapons_table 做
                    gui.SetValue("rbot.hitscan.mode." .. v .. ".bodyaim.force", 0);
                结尾
                switch_fbaim = false;
            结尾
        结尾
    结尾

    如果 switch_awall_key:GetValue() ~= 0 那么
        如果 input.IsButtonPressed(switch_awall_key:GetValue()) 那么
            如果不是 switch_awall 那么
                for i, v in next, weapons_table 做
                    gui.SetValue("rbot.hitscan.mode." .. v .. ".autowall", 1);
                结尾
                switch_awall = 真；
            别的
                for i, v in next, weapons_table 做
                    gui.SetValue("rbot.hitscan.mode." .. v .. ".autowall", 0);
                结尾
                switch_awall = false;
            结尾
        结尾
    结尾

    局部 x, y = draw.GetScreenSize()
    局部中心 X = x / 2

    绘制颜色（255、255、255、255）
    draw.Text(centerX + 150, y - 15, #kills)
 
    绘制颜色(0, 255, 0, 255)
    draw.Text(centerX + 105, y - 15, "Kills:")
 

    绘制颜色（255、255、255、255）
    draw.Text(centerX + 255, y - 15, #deaths)
 
    绘制颜色（255、50、50、255）
    draw.Text(centerX + 205, y - 15, "死亡:")
 
结尾

本地 teamDamageArray = {}

局部函数游戏事件（事件）

	如果事件：GetName（）==“weapon_fire”然后
		lPlayer = entities.GetLocalPlayer()
		lPlayerTeam = lPlayer:GetTeamNumber()
	结尾

	如果 event:GetName() == "player_hurt" 或 event:GetName() == "player_death" 那么
		 attacker = event:GetInt("攻击者")
		 受害者=事件：GetInt（“用户ID”）
		 dmgdone = event:GetInt("dmg_health")
		 attackerIndex = client.GetPlayerIndexByUserID（攻击者）
		 victimIndex = client.GetPlayerIndexByUserID(受害者)
		 attackerName = client.GetPlayerNameByUserID(攻击者)
		 attackerUID = entities.GetBy UserID（攻击者）
		 victimUID = entities.GetByUserID（受害者）
		 攻击者团队 = attackerUID:GetTeamNumber()
		 受害者团队 = victimUID:GetTeamNumber()
		 attackerPlayerInfo = client.GetPlayerInfo（attackerIndex）
		 victimPlayerInfo = client.GetPlayerInfo(victimIndex)
		 attackerSteamID = attackerPlayerInfo["SteamID"]
		 victimSteamID = victimPlayerInfo["SteamID"]

		如果事件：GetName() == "player_hurt" 那么
			本地 lPlayerTeam = lPlayer:GetTeamNumber()
			如果 victimTeam == lPlayerTeam 和 attackerTeam == lPlayerTeam 和 victimIndex ~= attackerIndex 那么
				如果 teamDamageArray[attackerSteamID] == nil 那么
					teamDamageArray[attackerSteamID] = {0, 0, attackerName}
				结尾
				teamDamageArray[attackerSteamID][1] = teamDamageArray[attackerSteamID][1] + dmgdone
			结尾
		elseif event:GetName() == "player_death" 那么
			本地 lPlayerTeam = lPlayer:GetTeamNumber()
			如果 victimTeam == lPlayerTeam 和 attackerTeam == lPlayerTeam 和 victimIndex ~= attackerIndex 那么
				teamDamageArray[attackerSteamID][2] = teamDamageArray[attackerSteamID][2] + 1
			结尾
		结尾
	结尾
	如果事件：GetName（）==“cs_win_panel_match”那么
		teamDamageArray = {}
	结尾
结尾
--第三


本地第三人称=“esp.local.thirdperson”

局部函数 third_person_esp()
	如果 gui.GetValue(thirdperson) ~= true 则返回结束
	如果 third_person_indicators:GetValue() ~= true 则返回结束
	local localplayer = entities.GetLocalPlayer();
	如果 localplayer == nil 然后返回结束
	本地头 = localplayer:GetHitboxPosition(0)
	本地 head_pos_x, head_pos_y = client.WorldToScreen(head)
	local velocity = math.sqrt(localplayer:GetPropFloat( "localdata", "m_vecVelocity[0]" ) ^ 2 + localplayer:GetPropFloat( "localdata", "m_vecVelocity[1]" ) ^ 2)
	local fake_duck_on = cheat.IsFakeDucking();
	
	如果 head_pos_x == nil 则返回 end
	如果 head_pos_y == nil 则返回 end
	
	如果 current_damage == nil 那么
		返回
	结尾
	
	local damage_information = "damage: " .. current_damage
	
	local speed = "velocity: " .. string.format('%.f', 速度)
	local fake_duck = "假鸭子：" .. tostring(fake_duck_on)
	
	draw.SetFont（third_person_font）
    本地地图名称 = engine.GetMapName()
	
    local watermarktext = "damage: " .. current_damage .. " velocity: " .. string.format('%.f', velocity) .. " fake duck: " .. tostring(fake_duck_on)
    本地 watermark_text_size_x, watermark_text_size_y = draw.GetTextSize(watermarktext)
	
	绘制颜色（0、0、0、150）
	draw.FilledRect(head_pos_x + 47, head_pos_y, head_pos_x + watermark_text_size_x + 56, head_pos_y - 30); -- 灰色背景
	
	draw.Color(bomb_col:GetValue());
    draw.FilledRect(head_pos_x + 47, head_pos_y - 32, head_pos_x + watermark_text_size_x + 56, head_pos_y - 30); -- 顶线
	
	绘制颜色(255, 255, 255)
	draw.Text(head_pos_x + 50, head_pos_y - 20, watermarktext)
结尾
--第三端
屏幕大小 = {0, 0}
局部函数 draw_Func()
    如果 Team:GetValue() ~= true 则返回结束
	screenSize = {draw.GetScreenSize()}
	本地玩家数 = 0
	对于 i，v 成对（teamDamageArray）做

        本地 lc = entities.GetLocalPlayer();
        如果 lc 和 lc:IsAlive() 那么
			如果 playerCount % 2 == 0 那么
				绘制颜色（20、20、20、255）
			别的
				绘制颜色（20、20、20、255）
			结尾

			如果 v[3]:len() > 15 那么
				v[3] = v[3]:sub(1, 15).."..."
			结尾

           
			draw.FilledRect(screenSize[1] - select(1, draw.GetTextSize("Damage: 300")) - 53, screenSize[2] * 0.187 + (screenSize[2] * 0.027 * playerCount), screenSize[1], screenSize[2] * 0.214 + (screenSize[2] * 0.027 * playerCount))
		
			如果 v[2] == 0 那么
				绘制颜色（245、245、245、255）
			elseif v[2] == 1 那么
				绘制颜色(245, 245, 0, 255)
			elseif v[2] == 2 那么
				绘制颜色(245, 150, 0, 255)
			elseif v[2] >= 3 那么
				绘制颜色（245、0、0、255）				
			结尾
			draw.TextShadow(screenSize[1] - select(1, draw.GetTextSize("Kills: 0")) - 5, screenSize[2] * 0.2 + (screenSize[2] * 0.027 * playerCount), "Kills: ". .v[2])	

		
			如果 v[1] < 100 那么
				绘制颜色(245, 245, 0, 255)
			elseif v[1] > 99 和 v[1] < 199 那么
				绘制颜色(245, 150, 0, 255)
			elseif v[1] > 200 那么
				绘制颜色（245、0、0、255）
			结尾
			draw.TextShadow(screenSize[1] - select(1, draw.GetTextSize("Damage: 300")) - 50, screenSize[2] * 0.2 + (screenSize[2] * 0.027 * playerCount), "Damage: ". .v[1])

	
			绘制颜色（255、255、255、255）
			draw.TextShadow(screenSize[1] - select(1, draw.GetTextSize("Damage: 300")) - 50, screenSize[2] * 0.189 + (screenSize[2] * 0.027 * playerCount), v[3])
			

			玩家数 = 玩家数 + 1
		结尾
	结尾
结尾


---
--©thekorol

--local enhancement = gui.Reference("Misc", "Enhancement", "Appearance")

局部函数 filter_weapon(wepList)
	对于索引，ipairs(wepList) 中的值做
		本地 wepType = getWeaponType(值)
		如果 wepType == "smg" 或 wepType == "rifle" 或 wepType == "shotgun" 或 wepType == "sniperrifle" 或 wepType == "machinegun" 然后
			如果不是 menu.item_1:GetValue() 那么
				table.remove（wepList，索引）
			结尾
		elseif wepType == "手枪" 那么
			如果不是 menu.item_2:GetValue() 那么
				table.remove（wepList，索引）
			结尾
		elseif wepType == "taser" 那么
			如果不是 menu.item_3:GetValue() 那么
				table.remove（wepList，索引）
			结尾
		elseif wepType == "grenade" 那么
			如果不是 menu.item_4:GetValue() 那么
				table.remove（wepList，索引）
			结尾
		elseif wepType == "c4" 那么
			如果不是 menu.item_5:GetValue() 那么
				table.remove（wepList，索引）
			结尾
		elseif wepType == "defuser" 那么
			如果不是 menu.item_6:GetValue() 那么
				table.remove（wepList，索引）
			结尾
		elseif wepType == "armor" 那么
			如果不是 menu.item_7:GetValue() 那么
				table.remove（wepList，索引）
			结尾
		别的
			如果不是 menu.item_8:GetValue() 那么
				table.remove（wepList，索引）
			结尾
		结尾
	结尾
	返回 wepList
结尾

本地 hl = {}
局部函数 add_weapon(idx, weapon)
	如果 player_weapons 和 player_weapons[idx] 和 #player_weapons[idx] > 0 那么
		对于 i = 1，#player_weapons[idx] 做
			如果 player_weapons[idx][i] == weapon 那么
				返回
			结尾
		结尾
	结尾
	table.insert(player_weapons[idx], 武器)
结尾

局部函数 remove_weapon(idx, weapon)
	如果 #player_weapons[idx] > 0 那么
		对于 i = 1，#player_weapons[idx] 做
			如果 player_weapons[idx][i] == weapon 那么
				table.remove(player_weapons[idx], i)
			结尾
		结尾
	结尾
结尾

局部函数 deep_compare(tbl1, tbl2)
	对于 key1，value1 成对（tbl1）做
		局部值 2 = tbl2[key1]
		如果 value2 == nil 那么
			返回假
		elseif value1 ~= value2 那么
			如果 type(value1) == "table" 和 type(value2) == "table" 那么
				如果不是 deep_compare(value1, value2) 那么
					返回假
				结尾
			别的
				返回假
			结尾
		结尾
	结尾
	对于 key2，_ 成对（tbl2）做
		如果 tbl1[key2] == nil 那么
			返回假
		结尾
	结尾
	返回真
结尾

本地最后更新 = 0
callbacks.Register("Draw", "hud_weapon_render", function()
	如果 hudweapon_enable:GetValue() 和 entities.GetLocalPlayer() 那么
		本地 player_resource = entities.GetPlayerResources()
		本地 currentUpdatePlayer = globals.FrameCount() % 16
		如果 currentUpdatePlayer ~= lastUpdate 那么
			局部函数 updateIdx(currentUpdatePlayer)
				局部 r, g, b, a = hudweapon_color:GetValue()
				local forced_index = math.floor(currentUpdatePlayer)
				本地玩家信息 = client.GetPlayerInfo(forced_index)
				如果 playerInfo 而不是 playerInfo.IsGOTV 那么
					本地 player_ent = entities.GetByIndex(forced_index)
					如果 player_ent 而不是 player_ent:IsDormant() 那么
						本地 current_player_data = {}
						本地 active_weapon = player_ent:GetWeaponID()
						如果 active_weapon ~= nil 那么
							如果 player_ent:GetPropInt("m_bHasDefuser") == 1 那么
								table.insert(current_player_data, "55")
							结尾
							对于 slot = 0, 63 do
								本地 weapon_ent = player_ent:GetPropEntity("m_hMyWeapons", string.format("%0.3d", slot))
								如果 weapon_ent ~= nil 那么
									本地 wep_id = weapon_ent:GetWeaponID()
									如果 wep_id 那么
										table.insert(current_player_data, tostring(wep_id))
									结尾
								结尾
							结尾
						结尾
						如果 player_resource:GetPropInt("m_iArmor", player_ent:GetIndex()) > 0 那么
							如果 player_resource:GetPropInt("m_bHasHelmet", player_ent:GetIndex()) == 1 然后
								table.insert(current_player_data, "51")
							别的
								table.insert(current_player_data, "50")
							结尾
						结尾
						Client.updateWeapons(forced_index, {r, g, b}, a, filter_weapon(current_player_data), tostring(active_weapon))
						返回
					elseif player_weapons[forced_index] and #player_weapons[forced_index] > 0 然后
						Client.updateWeapons(forced_index, {r, g, b}, a, filter_weapon(player_weapons[forced_index]), hl[forced_index])
						返回
					elseif player_weapons[forced_index] and #player_weapons[forced_index] == 0 那么
						Client.updateWeapons(player_ent:GetIndex(), {r, g, b}, a, {"dead"}, "dead")
					结尾
					如果不是 player_ent:IsAlive() 那么
						Client.updateWeapons(player_ent:GetIndex(), {r, g, b}, a, {"dead"}, "dead")
					结尾
				结尾
			结尾
			updateIdx(currentUpdatePlayer)
			updateIdx(currentUpdatePlayer * 2)
			updateIdx(currentUpdatePlayer * 4)
		结尾
		lastUpdate = currentUpdatePlayer
	结尾
结尾）
client.AllowListener("item_equip")
client.AllowListener("item_pickup")
client.AllowListener("item_remove")
client.AllowListener("grenade_thrown")
client.AllowListener("player_death")
client.AllowListener("cs_game_disconnected")
client.AllowListener("cs_match_end_restart")
client.AllowListener("start_halftime")
client.AllowListener("game_newmap")
client.AllowListener("round_end")
client.AllowListener("bomb_dropped")
callbacks.Register("FireGameEvent", "hud_weapon_events", 函数(事件)
	本地事件名称 = 事件：GetName()
	如果 eventName 那么
		如果 eventName == "item_equip" 那么
			本地 entid = entities.GetByUserID(event:GetInt("userid")):GetIndex()
			本地 wepName = event:GetString("defindex")
			hl[entid] = wepName
		elseif eventName == "item_pickup" 那么
			add_weapon(entities.GetByUserID(event:GetInt("userid")):GetIndex(), event:GetString("defindex"))
		elseif eventName == "item_remove" 那么
			remove_weapon(entities.GetByUserID(event:GetInt("userid")):GetIndex(), event:GetString("defindex"))
		elseif eventName == "player_death" 然后
			如果 player_weapons 那么
				player_weapons[entities.GetByUserID(event:GetInt("userid")):GetIndex()] = {}
				Client.updateWeapons(entities.GetByUserID(event:GetInt("userid")):GetIndex(), {0, 0, 0}, 0, {"dead"}, "dead")
			结尾
		elseif eventName == "round_end" 或 eventName == "bomb_dropped" 然后
			对于 k，v 成对（player_weapons）做
				移除武器（k，“49”）
			结尾
		结尾
	结尾
结尾）
--©thekorol

- 结尾






局部函数 main()
   


 

结尾


函数 paint_traverse()
    本地 lc = entities.GetLocalPlayer();
  如果 lc 和 lc:IsAlive() 那么
    局部 x, y = draw.GetScreenSize()
    局部中心 X = x / 2
 
如果 Ind2:GetValue() ~= true 则返回结束
	

 draw.Color(Ind_col2:GetValue())
 draw.FilledRectFade(centerX - 50, y - 511, centerX + 50, y - 509)
 draw.SetFont(Ind_font);
 绘制颜色（255、255、255、255）
 draw.Text(centerX - 40, y - 525, "Nigga .lua")
 draw.Color(Ind_col2name:GetValue());
 draw.Text(centerX - 5, y - 525, "鱼")
 绘制颜色（255、255、255、255）；
 draw.Text(centerX - 45, y-505, "愤怒:");
 draw.Text(centerX - 45, y-490, "Fov:");
 draw.Text(centerX - 45, y-475, "DMG:");
 draw.Text(centerX - 45, y-460, "精度:");
 draw.Text(centerX - 45, y-445, "Awall:");
 draw.Text(centerX - 45, y-430, "Baim:");


  draw.Color(0, 255, 0, 255);
  draw.Text(centerX + 20, y-490, gui.GetValue("rbot.aim.target.fov","°"));
  draw.Color(0, 255, 0, 255);
  draw.Text(centerX + 20, y-475, gui.GetValue("rbot.accuracy.weapon." .. get_weapon_class(lc) .. ".mindmg"));
  如果 (gui.GetValue("rbot.master") == true ) 和 (gui.GetValue("rbot.aim.enable") == true) 然后
      onoroff = "开"
      绘制颜色(0, 255, 0, 255)
      draw.Text(centerX + 20, y-505, onoroff)     
      别的
      onoroff = "关闭"
      绘制颜色(255, 0, 0, 255)
      draw.Text(centerX + 20, y-505, onoroff)     
      
  结尾

 如果 switch_awall 那么
      draw.Color(0, 255, 0, 255);
      draw.Text(centerX + 20, y-445, "ON");
  别的
      draw.Color(255, 0, 0, 255);
      draw.Text(centerX + 20, y-445, "关闭");
  结尾

  如果 switch_fbaim 那么
      draw.Color(0, 255, 0, 255);
      draw.Text(centerX +20, y-430, "ON");
  别的
      draw.Color(255, 0, 0, 255);
      draw.Text(centerX +20, y-430, "关闭");
  结尾


  局部精度 = 100 - math.floor(entities.GetLocalPlayer():GetWeaponInaccuracy() * 10 ^ 3 + 0.5) / 10 ^ 3 * 100;

  如果准确度 > 90 那么
      draw.Color(0, 255, 0, 255);
      draw.Text(centerX +20, y-460, "高");
  别的
      draw.Color(255, 0, 0, 255);
      draw.Text(centerX +20, y-460, "低");
  结尾

  
结尾

如果不检查（switch_enable）那么
  返回;
结尾

如果 switch_fbaim_key:GetValue() ~= 0 那么
  如果 input.IsButtonPressed(switch_fbaim_key:GetValue()) 那么
      如果不是 switch_fbaim 那么
          for i, v in next, weapons_table 做
              gui.SetValue("rbot.hitscan.mode." .. v .. ".bodyaim.force", 1);
          结尾
          switch_fbaim = 真；
      别的
          for i, v in next, weapons_table 做
              gui.SetValue("rbot.hitscan.mode." .. v .. ".bodyaim.force", 0);
          结尾
          switch_fbaim = false;
      结尾
  结尾
结尾

如果 switch_awall_key:GetValue() ~= 0 那么
  如果 input.IsButtonPressed(switch_awall_key:GetValue()) 那么
      如果不是 switch_awall 那么
          for i, v in next, weapons_table 做
              gui.SetValue("rbot.hitscan.mode." .. v .. ".autowall", 1);
          结尾
          switch_awall = 真；
      别的
          for i, v in next, weapons_table 做
              gui.SetValue("rbot.hitscan.mode." .. v .. ".autowall", 0);
          结尾
          switch_awall = false;
      结尾
  结尾
结尾
   
结尾

--val



局部函数 anti_aim_arrows()
    本地 lc = entities.GetLocalPlayer();
    如果 lc 和 lc:IsAlive() 那么
    如果 anti_aim_arrow_cb:GetValue() ~= true 则返回结束
    本地 screen_size_x, screen_size_y = draw.GetScreenSize();
	当地方向
	
	绘制颜色（255、255、255、255）
	
	如果 gui.GetValue(baserotation) >= 0 那么
		方向=“左”
	别的
		方向=“右”
	结尾
	
	如果方向 == "正确" 那么
        draw.SetFont(字体2)
        绘制颜色（255,255,255）；
        draw.TextShadow(screen_w / 2 - 65, screen_h / 2 - 15, "⮜");
    
         draw.Color(main_clr:GetValue());       
         draw.TextShadow(screen_w / 2 - 65, screen_h / 2 - 15, "⮜");
         
    结尾
	
	如果方向 == "左" 那么
        draw.SetFont(字体2)
		 绘制颜色（255,255,255）；
        draw.TextShadow(screen_w / 2 + 45, screen_h / 2 - 15, "⮞");
        draw.Color(main_clr:GetValue());
        draw.TextShadow(screen_w / 2 + 45, screen_h / 2 - 15, "⮞");
	结尾
结尾
结尾
	


函数绘制()

	anti_aim_arrows()
  -- third_person_esp()
结尾




--玩家列表
局部 w,h = draw.GetScreenSize()

本地 IN_SCOREBOARD = false

本地队伍 = {
“白银1”，
“白银2”，
《白银3》，
“白银4”，
“白银精英”，
“白银精英大师”，

“黄金新星 1”，
“黄金新星2”，
“黄金新星3”，
“黄金新星大师”，

"MG1",
"MG2",
"梅根",
"伤害",

“乐”，
“莱姆”，
"SMFC",
“GE”
}

本地字体 = draw.CreateFont("Tahoma", 20, 450)

callbacks.Register("CreateMove", 函数(cmd)
本地 IN_SCORE = bit.lshift(1, 16)
IN_SCOREBOARD = bit.band(cmd.buttons, IN_SCORE) == IN_SCORE
结尾）

callbacks.Register("绘制", function()
如果不是 engine.GetServerIP() 则返回结束

如果不是 engine.GetServerIP():gmatch("=[A:") 然后返回结束

如果不是 gui.Reference("menu"):IsActive() 而不是 IN_SCOREBOARD 则返回结束

局部 y = h/2

for i, v in next, entities.FindByClass("CCSPlayer") 做
如果 v:GetName() ~= "GOTV" 和 entities.GetPlayerResources():GetPropInt("m_iPing", v:GetIndex()) ~= 0 然后
本地索引 = v:GetIndex()
local rank_index = entities.GetPlayerResources():GetPropInt("m_iCompetitiveRanking", index)
本地获胜 = entities.GetPlayerResources():GetPropInt("m_iCompetitiveWins", index)
本地排名 = ranks[rank_index] 或“未排名”
draw.SetFont(字体)
绘制颜色（255,255,255,255）
draw.Text(5, y, v:GetName().." - 排名："..rank.." 获胜："..wins)
y = y + 30
结尾
结尾
结尾）
--玩家列表结束





--回调
client.AllowListener("player_hurt")
callbacks.Register("SendStringCmd", on_cmd)
callbacks.Register("FireGameEvent", on_player_hurt)
callbacks.Register("CreateMove", on_create_move)
callbacks.Register( "FireGameEvent", "KillDeathCount", KillDeathCount);
回调.注册(
    "DispatchUserMessage",
    功能（嗯）
        本地 lp = entities.GetLocalPlayer()
        如果不是 (gui.GetValue("misc.master") and on:GetValue() and lp) then
            返回
        结尾

        本地团队 = lp:GetTeamNumber()
        local clr = team == 2 and "\09" or team == 3 and "\10" or "\01"
        如果 um:GetID() == 46 那么
            本地类型 = um:GetInt(3)
            本地类型名称 =
                输入 == 0 和“\07kick player”或输入 == 1 和“更改地图”或输入 == 6 和“\04Surrender”或
                输入 == 13 和“\07Call a timeout”

            客户端.PrintChat(
                "[" .. clr .. "\02NiggaFish.lua\01] " .. client.GetPlayerNameByIndex(um:GetInt(2)) .. " 想要 " .. type_name .. um:GetString(5)
            )
        结尾

        本地结果 = um:GetID() == 47 和“\06Passed”或 um:GetID() == 48 和“\02Failed”
        local _ = results and client.PrintChat("[" .. clr .. "\02NiggaFish.lua\01] " .. results)
    结尾
)

client.AllowListener("vote_cast")

回调.注册(
    "消防游戏事件",
    函数(e)
        本地 lp = entities.GetLocalPlayer()
        如果不是 (gui.GetValue("misc.master") and on:GetValue() and lp) then
            返回
        结尾

        如果 e:GetName() 和 e:GetName() == "vote_cast" 那么
            本地团队 = lp:GetTeamNumber()
            本地选项 = e:GetInt("vote_option")
            本地结果 = 选项 == 0 和“\06YES”或选项 == 1 和“\07NO”或“？”

            客户端.PrintChat(
                “[”..
                    （团队 == 2 和“\09”或团队 == 3 和“\10”或“\02”）..
                        "\02NiggaFish.lua\01] " .. client.GetPlayerNameByIndex(e:GetInt("entityid")) .. " " .. 结果
            )
        结尾
    结尾
)

回调.注册(
            “画”，
            功能（）
                 ag = globals.FrameTime() * 8
                 s, h, c, b = Z:GetValue()
                 ah = 实体.GetLocalPlayer()
                 ai = os.date("%X")
                 aj = "NiggaFish.lua"
                 --local ak = ah and ah:GetName() 或 client.GetConVar("name")

                 ak = ah 和 cheat.GetUserName() 或 cheat.GetUserName()
                 al = (" %s | %s | %s"):格式(aj, ak, ai)
                如果啊那么
                     am = entities.GetPlayerResources():GetPropInt("m_iPing", ah:GetIndex())
                     一个=（“|延迟：%dms”）：格式（am）
                    al = (" %s | %s%s | %s"):format(aj, ak, an, ai)
                结尾
                绘制.SetFont(a1)
                 ao, ap = draw.GetScreenSize()
                 我，x = 18，draw.GetTextSize(al) + 8
                 y, z = ao, 10 + 25 * 0
                y = y - x - 10
                a2.watermark = math.clamp(a2.watermark + (Y:GetValue() and ag or -ag), 0, 1)
                draw.SetScissorRect(y + x - x * a2.watermark, z, x, i * 3)
                如果 X:GetValue() 那么
                    绘制颜色（s，h，c）
                    draw.FilledRectFade(y + x / 2 + 1, z + 2, y, z, true)
                    draw.FilledRectFade(y + x / 2, z, y + x, z + 2, true)
                    绘制颜色（h，c，s）
                    draw.FilledRectFade(y, z, y + x / 2 + 1, z + 2, true)
                    绘制颜色（c，s，h）
                    draw.FilledRectFade(y + x, z + 2, y + x / 2, z, true)
                别的
                    绘制颜色（s，h，c）
                    draw.FilledRect(y, z, y + x, z + 2)
                结尾
             
                绘制颜色（17、17、17、255）
                draw.FilledRect(y, z + 2, y + x, z + i)
                绘制颜色(255, 255, 255)
                draw.Text(y + 4, z + 4, al)
                 al = ("%dhz"):format(tonumber(af[0].dmDisplayFrequency))
                 我，x = 18，draw.GetTextSize(al) + 8
                 y, z = ao, 10 + 25 * 1
                y = y - x - 10
               
                绘制颜色（17、17、17、b）
                draw.FilledRect(y-90, z, y + x, z + i)
                绘制颜色(255, 255, 255)
                draw.Text(y - 55, z + 4, #kills)
                draw.Text(y - 85, z + 4, "杀死:")

                draw.Text(y + 15, z + 4, #deaths)
                draw.Text(y - 35, z + 4, "死亡:")
                draw.Color(Z:GetValue())
                draw.FilledRect(y-90, z+20, y + x, z + i)
                绘制颜色(255, 255, 255)
                draw.SetScissorRect(0, 0, ao, ap)
               
   

                
               
             
            结尾
        )

callbacks.Register("画", 猴子)
  
callbacks.Register("卸载", function()
  设置标签（“”）
结尾）

client.AllowListener("bomb_beginplant");
client.AllowListener("bomb_abortplant");
client.AllowListener("bomb_begindefuse");
client.AllowListener("bomb_abortdefuse");
client.AllowListener("bomb_defused");
client.AllowListener("bomb_exploded");
client.AllowListener("round_officially_ended");
client.AllowListener("bomb_planted");

callbacks.Register("绘制",渲染);
callbacks.Register("FireGameEvent",EventHook);


callbacks.Register("Draw", "changeMinDamage", changeMinDamage);
callbacks.Register("绘制", 绘制)
callbacks.Register( 'FireGameEvent', 'AWKS', NiggaFish_KillSay )
callbacks.Register( 'FireGameEvent', 'AWKS', AimWare_KillSay )


callbacks.Register('绘制', function()
	如果 EngineRadar:GetValue() == true 那么
		isEngineRadarOn = 1
	别的
		isEngineRadarOn = 0
	结尾

	对于索引，成对播放器（entities.FindByClass（'CCSPlayer'））做
        播放器：SetProp（'m_bSpotted'，isEngineRadarOn）
	结尾
结尾）
callbacks.Register("画",Clantag)
client.AllowListener( "player_death" );
client.AllowListener( "client_disconnect" );
client.AllowListener( "begin_new_match" );

callbacks.Register("绘制", "paint_traverse", paint_traverse);
callbacks.Register("绘制", function()
    如果 key:GetValue() ~= 0 那么
        如果 input.IsButtonPressed(key:GetValue()) 那么
 按下=真；
 elseif (按下并输入.IsButtonReleased(key:GetValue())) 然后
 按下=假；
 如果 gui.GetValue("rbot.master") 那么
 gui.SetValue("rbot.master", false)
 gui.SetValue("lbot.master", true)
 别的
 gui.SetValue("rbot.master", true)
 gui.SetValue("lbot.master", false)
 结尾
 结尾
    结尾
 
结尾）

client.AllowListener("player_death")
client.AllowListener("player_hurt")
client.AllowListener("weapon_fire")
client.AllowListener("cs_win_panel_match")
callbacks.Register("FireGameEvent", "gameEvents", gameEvents)
callbacks.Register("Draw", "draw_Func", draw_Func)


回调.注册(
    “画”，
    功能（）
        本地 lp = entities.GetLocalPlayer()

        如果不是 entities.GetLocalPlayer() 那么
            返回
        结尾

        本地名称= {“关闭”}
        本地氏族 = {}

        对于 k，v 成对（entities.FindByClass（“CCSPlayer”））做
            本地 idx = v:GetIndex()
            本地 m_szClan = idx ~= lp:GetIndex() 和 entities.GetPlayerResources():GetPropString("m_szClan", idx)
            如果 m_szClan 那么
                table.insert(name, v:GetName())
                table.insert(氏族, m_szClan)
            结尾
        结尾

        stealclan：SetOptions（解压（名称））

        如果 clan[stealclan:GetValue()] 和 entities.GetPlayerResources():GetPropString("m_szClan", lp:GetIndex()) ~= clan[stealclan:GetValue()] 然后
            client.SetClanTag(氏族[stealclan:GetValue()])
        结尾
    结尾
)


callbacks.Register("Draw", "dynamic_fov", dynamic);
callbacks.Register("绘制", "开关", 开关);
callbacks.Register("Draw", "defaults", main);

print("Welocme to NiggaFish.lua "..UserName.."!")
