<html>
   <title></title>
   <body>
      <table bgcolor="fff9ec" cellpadding="0" cellspacing="0" border="0" align="center" style="min-width: 710px; max-width: 710px; width: 710px; margin: 0 auto; background-color: rgba(255, 249, 236, 1)">
         <tbody>
            <tr>
               <td style="min-width: 35px; max-width: 35px; width: 35px"> </td>
               <td>
                  <table cellpadding="0" cellspacing="0" border="0" style="min-width: 640px; max-width: 640px; width: 640px">
                     <tbody>
                        <tr>
                           <td>
                              <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                 <tbody>
                                    <tr>
                                       <td width="100%" height="35"> </td>
                                    </tr>
                                 </tbody>
                              </table>
                              <table cellpadding="0" cellspacing="0" border="0" width="100%" style="background-color: rgba(255, 255, 255, 1); box-shadow:0 5px 90px rgb(164 243 251);">
                                 <tbody>
                                    <tr>
                                       <td height="60" style="border: none; background-color: #3498db;">
                                          <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                             <tbody>
                                                <tr>
                                                   <td width="2%"> </td>
                                                   <td width="48%">
                                                      <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                                         <tbody>
                                                            <tr height="60">
                                                               <td valign="middle"><a href="https://education.workstream.club/" target="_blank" style="cursor: pointer"><img src="https://education.workstream.club/_next/static/img/logo.png" width="160" height="42" border="0" alt="parentteacherhub"> </a></td>
                                                            </tr>
                                                         </tbody>
                                                      </table>
                                                   </td>
                                                   <td width="48%">
                                                      <table align="right" cellpadding="0" cellspacing="0" border="0" width="100%">
                                                         <tbody>
                                                            <tr height="60">
                                                               <td valign="middle" style="color: rgba(255, 255, 255, 1); font-family: helvetica, arial, sans-serif; text-align: right; font-weight: bold; position: relative; top: 2px; font-size: 18px; vertical-align: middle"></td>
                                                            </tr>
                                                         </tbody>
                                                      </table>
                                                   </td>
                                                   <td width="2%"> </td>
                                                </tr>
                                             </tbody>
                                          </table>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td width="100%" height="4" style="background-color: rgba(246, 139, 28, 1); font-size: 1px; line-height: 1px; height: 4px">&nbsp;</td>
                                    </tr>
                                    <tr style="">
                                       <td width="100%" height="40" style="background-color: rgba(255, 255, 255, 1)">&nbsp;</td>
                                    </tr>
                                    <tr style="">
                                       <td width="100%">
                                          <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                             <tbody>
                                                <tr>
                                                   <td width="8%"></td>
                                                   <td width="84%" style="color: rgba(0, 0, 0, 1); font-size: 18px; text-align: left; font-family: helvetica, arial, sans-serif; line-height: 27px">
                                                      <table border="0" width="100%" cellspacing="0" cellpadding="0">
                                                         <tbody>
                                                            <tr>
                                                               <td align="center">
                                                                  <p style="font-size: 32px; font-weight: bold; line-height: 30px; margin: -20px 0 0">Someone signed up! </p>
                                                                  <p style="line-height: 30px; font-size: 16px">Hi, {{$user}} This email is to notify you that someone recently signed up for "{{$signup['title']}}."</p>
                                                                  <p style="margin-top: 30px; font-weight: bold; font-size: 22px">{{$firstname}} {{$lastname}} signed up for:  {{$signup['title']}}</p>
                                                               </td>
                                                            </tr>
                                                            <tr>
                                                               <td height="30">&nbsp; </td>
                                                            </tr>
                                                         </tbody>
                                                      </table>
                                                      <table style="width: 100% !important" border="0" width="100%" cellspacing="0" cellpadding="0">
                                                         <tbody>
                                                            <tr>
                                                               <td style="background-color:  #227fde !important; border-collapse: collapse; line-height: 1px" align="left" valign="top" width="100%" height="1"> </td>
                                                            </tr>
                                                         </tbody>
                                                      </table>
                                                      <table border="0" width="100%" cellspacing="0" cellpadding="0">
                                                         <tbody>
                                                            <tr>
                                                               <td colspan="2" height="10">&nbsp; </td>
                                                            </tr>
                                                            <tr>
                                                               <td valign="top" width="65"><img src="http://www.parentteacherhub.com/images/icons/email/check.png" alt="Signed Up" width="50" border="0"></td>
                                                               <td valign="le">
                                                                  <p style="font-size: 16px; color: rgba(0, 0, 0, 1) !important; text-decoration: none; line-height: 30px"><span style="font-size: 22px; font-weight: bold">{{$tslot}}</span> ({{$quantity}})<br></p>
                                                                  <p style="font-size: 16px; color: rgba(0, 0, 0, 1) !important; text-decoration: none; line-height: 30px"><span style="font-size: 22px; font-weight: bold">Event Name- &nbsp;</span> <b>{{$signup['group']}}</b><br></p>
                                                               </td>
                                                            </tr>
                                                            <tr>
                                                               <td colspan="2" height="10"></td>
                                                            </tr>
                                                            <tr>
                                                               <td valign="top" width="65"> </td>
                                                               <td valign="le">
                                                                  <div style="font-size: 16px; color: rgba(0, 0, 0, 1) !important; text-decoration: none; line-height: 30px"><strong><span style="font-size: 22px; font-weight: bold">{{date('m/d/Y', strtotime($adddate['date']))}} ({{date('D', strtotime($adddate['date']))}}.)  {{date('h:i A',strtotime($adddate['time1']))}} - {{date('h:i A',strtotime($adddate['time2']))}} {{$signup['timezone']}}</span><br></strong>Location: {{$adddate['location']}}<br>    <br> <br> Comments: {{$addslot['help']}}<br>  </div>
                                                               </td>
                                                            </tr>
                                                            <tr>
                                                               <td colspan="2" height="30"></td>
                                                            </tr>
                                                         </tbody>
                                                      </table>
                                                      <table style="width: 100% !important" border="0" width="100%" cellspacing="0" cellpadding="0">
                                                         <tbody>
                                                            <tr>
                                                               <td style="background-color: rgba(206, 206, 206, 1); border-collapse: collapse; line-height: 1px" align="left" valign="top" width="100%" height="1"> </td>
                                                            </tr>
                                                         </tbody>
                                                      </table>
                                                      <p></p>
                                                      <center>
                                                         <table width="100%">
                                                            <tbody>
                                                               <tr>
                                                                  <td>
                                                                     <table border="0" cellpadding="0" cellspacing="0">
                                                                        <tbody>
                                                                           <tr>
                                                                              <td height="30" width="100%" style="font-size: 20px; line-height: 20px"></td>
                                                                           </tr>
                                                                        </tbody>
                                                                     </table>
                                                                     <table border="0" align="center" cellpadding="0" cellspacing="0" style="margin: 0 auto">
                                                                        <tbody>
                                                                           <tr>
                                                                              <td align="center">
                                                                                 <table border="0" cellpadding="0" cellspacing="0" style="margin: 0 auto">
                                                                                    <tbody>
                                                                                       <tr>
                                                                                         <td align="center" bgcolor="#fd8d14" width="236" height="50" style="background-color:  #227fde !important; border-radius: 6px; color: rgba(255, 255, 255, 1)"><a href="{{url('/'.$adddate['url'])}}">View Sign up</a></td>
                                                                                       </tr>
                                                                                    </tbody>
                                                                                 </table>
                                                                              </td>
                                                                           </tr>
                                                                        </tbody>
                                                                     </table>
                                                                     <table border="0" cellpadding="0" cellspacing="0">
                                                                        <tbody>
                                                                           <tr>
                                                                              <td height="30" width="100%" style="font-size: 20px; line-height: 20px"></td>
                                                                           </tr>
                                                                        </tbody>
                                                                     </table>
                                                                  </td>
                                                               </tr>
                                                            </tbody>
                                                         </table>
                                                      </center>
                                                      <p></p>
                                                      <table border="0" width="100%" cellspacing="0" cellpadding="0">
                                                         <tbody>
                                                            <tr>
                                                               <td style="vertical-align: top" colspan="50%" align="center" valign="middle" height="30"><a style="text-decoration: none; line-height: 22px; font-size: 16px" href="mailto:"><img style="vertical-align: top" src="http://www.parentteacherhub.com/images/icons/email/envelope.png" alt="" height="20" border="0"> </a><a style="text-decoration: none" href="mailto:"> Contact {{$firstname}} {{$lastname}}</a> </td>
                                                            </tr>
                                                         </tbody>
                                                      </table>
                                                   </td>
                                                   <td width="8%"></td>
                                                </tr>
                                             </tbody>
                                          </table>
                                       </td>
                                    </tr>
                                    <tr style="">
                                       <td width="100%" height="40" style="background-color: rgba(255, 255, 255, 1)">&nbsp;</td>
                                    </tr>
                                    <tr height="25">
                                       <td style="text-align: center"><a href="https://www.parentteacherhub.com/about/about-advertising.cfm" target="_blank" style="cursor: pointer; color: rgba(170, 170, 170, 1); font-size: 12px; font-weight: normal; font-family: helvetica, arial, sans-serif; text-align: center; text-decoration: none"><span></span></a></td>
                                    </tr>
                                    <tr>
                                       <td width="640" style="max-width: 640px; width: 640px" align="center">
                                          <table cellpadding="0" cellspacing="0" border="0" width="610" style="table-layout: fixed; margin-left: auto; margin-right: auto" align="center">
                                             <tbody>
                                                <tr>
                                                   <td colspan="2" align="center" width="610">
                                                      <table border="0" cellpadding="0" cellspacing="0">
                                                         <tbody>
                                                            <tr>
                                                               
                                                            </tr>
                                                            <tr>
                                                               <td align="left"><a style="display: block; max-width: 116px; max-height: 15px" href="https://sli.parentteacherhub.com/click?s=146296&amp;li=6&amp;m=2F21226080CE1663BED70DFB7AA5F6C6&amp;p=45C8DAEB-EC3D&amp;stpe=static" rel="nofollow"><img src="https://sli.parentteacherhub.com/imp?s=146296&amp;li=6&amp;m=2F21226080CE1663BED70DFB7AA5F6C6&amp;p=45C8DAEB-EC3D&amp;stpe=static" border="0"></a></td>
                                                               <td align="right"><a style="display: block; max-width: 19px; max-height: 15px" href="https://sli.parentteacherhub.com/click?s=632110&amp;li=6&amp;m=2F21226080CE1663BED70DFB7AA5F6C6&amp;p=45C8DAEB-EC3D&amp;stpe=static" rel="nofollow"><img src="https://sli.parentteacherhub.com/imp?s=632110&amp;li=6&amp;m=2F21226080CE1663BED70DFB7AA5F6C6&amp;p=45C8DAEB-EC3D&amp;stpe=static" border="0"></a></td>
                                                            </tr>
                                                         </tbody>
                                                      </table>
                                                   </td>
                                                </tr>
                                             </tbody>
                                          </table>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td width="100%" height="40" style="background-color: rgba(255, 255, 255, 1)">&nbsp;</td>
                                    </tr>
                                    <tr>
                                       <td width="640" style="max-width: 640px; width: 640px">
                                          <table cellpadding="0" cellspacing="0" border="0" width="40" height="6">
                                             <tbody>
                                                <tr>
                                                   <td>
                                                      <table cellpadding="0" cellspacing="0" border="0" width="40" height="6">
                                                         <tbody>
                                                            <tr>
                                                               <td><img src="https://sli.parentteacherhub.com/imp?s=123978500&amp;li=6&amp;m=2F21226080CE1663BED70DFB7AA5F6C6&amp;p=45C8DAEB-EC3D&amp;stpe=pixel&amp;us_privacy=1YNN" width="2" height="6" border="0"></td>
                                                               <td><img src="https://sli.parentteacherhub.com/imp?s=123978501&amp;li=6&amp;m=2F21226080CE1663BED70DFB7AA5F6C6&amp;p=45C8DAEB-EC3D&amp;stpe=pixel&amp;us_privacy=1YNN" width="2" height="6" border="0"></td>
                                                               <td><img src="https://sli.parentteacherhub.com/imp?s=123978502&amp;li=6&amp;m=2F21226080CE1663BED70DFB7AA5F6C6&amp;p=45C8DAEB-EC3D&amp;stpe=pixel&amp;us_privacy=1YNN" width="2" height="6" border="0"></td>
                                                               <td><img src="https://sli.parentteacherhub.com/imp?s=123978503&amp;li=6&amp;m=2F21226080CE1663BED70DFB7AA5F6C6&amp;p=45C8DAEB-EC3D&amp;stpe=pixel&amp;us_privacy=1YNN" width="2" height="6" border="0"></td>
                                                               <td><img src="https://sli.parentteacherhub.com/imp?s=123978504&amp;li=6&amp;m=2F21226080CE1663BED70DFB7AA5F6C6&amp;p=45C8DAEB-EC3D&amp;stpe=pixel&amp;us_privacy=1YNN" width="2" height="6" border="0"></td>
                                                            </tr>
                                                         </tbody>
                                                      </table>
                                                   </td>
                                                </tr>
                                             </tbody>
                                          </table>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td width="100%" height="4" style="background-color: rgba(246, 139, 28, 1); font-size: 1px; line-height: 1px; height: 4px">&nbsp;</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </td>
                        </tr>
                        <tr>
                           <td height="10">&nbsp;</td>
                        </tr>
                        <tr height="45">
                           <td style="color: rgba(170, 170, 170, 1); font-size: 12px; line-height: 18px; text-align: center; font-family: arial, sans-serif"> <span><br>© 2022 ParentTeacherHub.  All Rights Reserved. </span> |  </td>
                        </tr>
                        <tr height="35">
                           <td> </td>
                        </tr>
                     </tbody>
                  </table>
               </td>
               <td style="min-width: 35px; max-width: 35px; width: 35px"> </td>
            </tr>
         </tbody>
      </table>
   </body>
</html>