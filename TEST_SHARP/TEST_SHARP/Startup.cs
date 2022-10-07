using Microsoft.Owin;
using Owin;

[assembly: OwinStartupAttribute(typeof(TEST_SHARP.Startup))]
namespace TEST_SHARP
{
    public partial class Startup
    {
        public void Configuration(IAppBuilder app)
        {
            ConfigureAuth(app);
        }
    }
}
