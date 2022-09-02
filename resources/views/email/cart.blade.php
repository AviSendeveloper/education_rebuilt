<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table cellpadding="0" cellspacing="0" border="0" width="100%">
   <tbody>
      <tr>
         <td width="8%"></td>
         <td width="84%" style="color: rgba(0, 0, 0, 1); font-size: 18px; text-align: left; font-family: helvetica, arial, sans-serif; line-height: 27px">
            <br>
            <table border="0" width="100%" cellspacing="0" cellpadding="0">
               <tbody>
                  <tr>
                     <td align="center">
                        <p style="font-size: 32px; font-weight: bold; line-height: 30px; margin: -20px 0 0">Thank you for Signing Up </p>
                        <p style="line-height: 30px; font-size: 16px">Hi, {{$firstname}} {{$lastname}}! We wanted to let you know that that you have recently signed up for {{$signup['title']}} organized by {{$user}} here  </p>
                        <p style="margin-top: 30px; font-weight: bold; font-size: 22px">You signed up for: {{$tslot}}</p>
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
                     <td style="background-color: rgba(206, 206, 206, 1); border-collapse: collapse; line-height: 1px" align="left" valign="top" width="100%" height="1"> </td>
                  </tr>
               </tbody>
            </table>
            <table border="0" width="100%" cellspacing="0" cellpadding="0">
               <tbody>
                  <tr>
                     <td colspan="2" height="10">&nbsp; </td>
                  </tr>
                  <tr>
                     <td valign="top" width="65"><img src="http://www.signupgenius.com/images/icons/email/check.png" alt="Signed Up" width="50" border="0"></td>
                     <td valign="le">
                        <p style="font-size: 16px; color: rgba(0, 0, 0, 1) !important; text-decoration: none; line-height: 30px"><span style="font-weight: bold; font-size: 22px">

                        </span> <span style="font-weight: normal"><span style="font-weight: normal">Name - {{$firstname}} {{$lastname}}</span><br><span style="font-weight: normal"> - {{$signup['group']}}</span><br><span style="line-height: 30px; font-weight: bold; font-size: 16px">{{$adddate['date']}} ({{$signup['timezone']}})</span><br><span style="line-height: 30px; font-weight: bold; font-size: 16px">{{date('h:i A',strtotime($adddate['time1']))}} - {{date('h:i A',strtotime($adddate['time2']))}}</span><br><span style="line-height: 30px; font-weight: normal; font-size: 16px">Location: {{$adddate['location']}}</span><br><span style="line-height: 30px; font-size: 16px">My Comment: {{$addslot['help']}}</span><br><br></span></p>
                     </td>
                  </tr>
                  <tr>
                     <td width="65">&nbsp; </td>
                     <td colspan="2">
                        <p style="font-size: 16px; text-decoration: none">&nbsp; </p>
                     </td>
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
            <span style="line-height: 30px; font-size: 16px">  </span> 
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
                      <td valign="middle" align="center" height="30" style="vertical-align: top" colspan="50%"><a href="{{url('/edit-process/'.$adddate['id'].'/'.$addslot['id'].'/'.$refer_id)}}" style="text-decoration: none; line-height: 22px; font-size: 16px"><img src="https://www.signupgenius.com/images/icons/email/pencil.png" height="20" border="0" style="vertical-align: top"><span style="vertical-align: top; font-size: 16px"> Edit My Sign Up</span></a></td>
                     <td style="vertical-align: top" colspan="50%" align="center" valign="middle" height="30"> Contact {{$user}} </td>
                  </tr>
               </tbody>
            </table>
            <br> 
         </td>
         <td width="8%"></td>
      </tr>
   </tbody>
</table>

</body>

</html>