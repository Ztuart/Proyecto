package org.apache.jsp;

import javax.servlet.*;
import javax.servlet.http.*;
import javax.servlet.jsp.*;

public final class mainUsuario_jsp extends org.apache.jasper.runtime.HttpJspBase
    implements org.apache.jasper.runtime.JspSourceDependent {

  private static final JspFactory _jspxFactory = JspFactory.getDefaultFactory();

  private static java.util.List<String> _jspx_dependants;

  private org.glassfish.jsp.api.ResourceInjector _jspx_resourceInjector;

  public java.util.List<String> getDependants() {
    return _jspx_dependants;
  }

  public void _jspService(HttpServletRequest request, HttpServletResponse response)
        throws java.io.IOException, ServletException {

    PageContext pageContext = null;
    HttpSession session = null;
    ServletContext application = null;
    ServletConfig config = null;
    JspWriter out = null;
    Object page = this;
    JspWriter _jspx_out = null;
    PageContext _jspx_page_context = null;

    try {
      response.setContentType("text/html");
      pageContext = _jspxFactory.getPageContext(this, request, response,
      			null, true, 8192, true);
      _jspx_page_context = pageContext;
      application = pageContext.getServletContext();
      config = pageContext.getServletConfig();
      session = pageContext.getSession();
      out = pageContext.getOut();
      _jspx_out = out;
      _jspx_resourceInjector = (org.glassfish.jsp.api.ResourceInjector) application.getAttribute("com.sun.appserv.jsp.resource.injector");

      out.write("<!DOCTYPE html>\n");
      out.write("<html lang=\"en\">\n");
      out.write("    <head>\n");
      out.write("        <meta charset=\"utf-8\">\n");
      out.write("        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">\n");
      out.write("        <title>LOGIN</title>        \n");
      out.write("        <link rel=\"stylesheet\" href=\"main.css\">\n");
      out.write("        <!-- Latest compiled and minified CSS -->\n");
      out.write("        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">\n");
      out.write("\n");
      out.write("        <!-- Optional theme -->\n");
      out.write("        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">\n");
      out.write("\n");
      out.write("        <!-- Latest compiled and minified JavaScript -->\n");
      out.write("        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>\n");
      out.write("\n");
      out.write("\n");
      out.write("    </head>\n");
      out.write("    <body>\n");
      out.write("        <div class=\"container\">\n");
      out.write("            <h3 style=\"text-align: right;\" ><strong>PUCP Delivery</strong></h3>\n");
      out.write("            <button class=\"btn btn-primary\" style=\"margin-left: 100px;float:right;\">Cerrar Sesión</button>\n");
      out.write("            <div class=\"jumbotron\" style=\"padding-top: 0;\">\n");
      out.write("                <div class=\"col-md-4\">\n");
      out.write("                    <h1>Bienvenido</h1>\n");
      out.write("                </div>\n");
      out.write("                <div class=\"col-md-4\">\n");
      out.write("                    <br>\n");
      out.write("                    <h2>Bernardo Pomiano</h2>\n");
      out.write("                </div>  \n");
      out.write("            </div>\n");
      out.write("            <div class=\"col-md-12\" style=\"padding-top: 0;\">\n");
      out.write("                <div class=\"input-group\" id=\"adv-search\">\n");
      out.write("                    <input type=\"text\" class=\"form-control\" placeholder=\"Buscar\">\n");
      out.write("                    <div class=\"input-group-btn\">\n");
      out.write("                        <button type=\"button\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-search\" aria-hidden=\"true\"></span></button>\n");
      out.write("                    </div>\n");
      out.write("                </div>\n");
      out.write("            </div>\n");
      out.write("        </div>\n");
      out.write("\n");
      out.write("        <div class=\"col-md-3\" style=\"padding-top: 50px;\">\n");
      out.write("            <div class=\"single category\">\n");
      out.write("                <h3 class=\"side-title\" >Categorías</h3>\n");
      out.write("                <ul class=\"list-group\">\n");
      out.write("                    <li class=\"list-group-item list-group-item-success\">Alimentos</li>\n");
      out.write("                    <li class=\"list-group-item list-group-item-success\">Inmuebles(Alquiler)</li>\n");
      out.write("                    <li class=\"list-group-item list-group-item-success\">Vehículos</li>\n");
      out.write("                    <li class=\"list-group-item list-group-item-success\">Artefactos</li>\n");
      out.write("                    <li class=\"list-group-item list-group-item-success\">Materiales Escritorio</li>\n");
      out.write("                    <li class=\"list-group-item list-group-item-success\" style=\"padding-bottom: 100px\"></li>\n");
      out.write("                    <li class=\"list-group-item list-group-item-success\">Vestibulum at eros</li>\n");
      out.write("                </ul>\n");
      out.write("            </div>\n");
      out.write("        </div>\n");
      out.write("        <div class=\"col-md-8\" style=\"padding-top: 50px;\">\n");
      out.write("            <h4>Subheading</h4>\n");
      out.write("            <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>\n");
      out.write("\n");
      out.write("            <h4>Subheading</h4>\n");
      out.write("            <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>\n");
      out.write("\n");
      out.write("            <h4>Subheading</h4>\n");
      out.write("            <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>\n");
      out.write("        </div>\n");
      out.write("    </body>\n");
      out.write("</html>");
    } catch (Throwable t) {
      if (!(t instanceof SkipPageException)){
        out = _jspx_out;
        if (out != null && out.getBufferSize() != 0)
          out.clearBuffer();
        if (_jspx_page_context != null) _jspx_page_context.handlePageException(t);
        else throw new ServletException(t);
      }
    } finally {
      _jspxFactory.releasePageContext(_jspx_page_context);
    }
  }
}
