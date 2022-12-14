USE [master]
GO
/****** Object:  Database [demo]    Script Date: 9/29/2022 10:14:34 PM ******/
CREATE DATABASE [demo]
 CONTAINMENT = NONE
 ON  PRIMARY 
( NAME = N'demo', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL13.MSSQLSERVER\MSSQL\DATA\demo.mdf' , SIZE = 8192KB , MAXSIZE = UNLIMITED, FILEGROWTH = 65536KB )
 LOG ON 
( NAME = N'demo_log', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL13.MSSQLSERVER\MSSQL\DATA\demo_log.ldf' , SIZE = 8192KB , MAXSIZE = 2048GB , FILEGROWTH = 65536KB )
GO
ALTER DATABASE [demo] SET COMPATIBILITY_LEVEL = 130
GO
IF (1 = FULLTEXTSERVICEPROPERTY('IsFullTextInstalled'))
begin
EXEC [demo].[dbo].[sp_fulltext_database] @action = 'enable'
end
GO
ALTER DATABASE [demo] SET ANSI_NULL_DEFAULT OFF 
GO
ALTER DATABASE [demo] SET ANSI_NULLS OFF 
GO
ALTER DATABASE [demo] SET ANSI_PADDING OFF 
GO
ALTER DATABASE [demo] SET ANSI_WARNINGS OFF 
GO
ALTER DATABASE [demo] SET ARITHABORT OFF 
GO
ALTER DATABASE [demo] SET AUTO_CLOSE OFF 
GO
ALTER DATABASE [demo] SET AUTO_SHRINK OFF 
GO
ALTER DATABASE [demo] SET AUTO_UPDATE_STATISTICS ON 
GO
ALTER DATABASE [demo] SET CURSOR_CLOSE_ON_COMMIT OFF 
GO
ALTER DATABASE [demo] SET CURSOR_DEFAULT  GLOBAL 
GO
ALTER DATABASE [demo] SET CONCAT_NULL_YIELDS_NULL OFF 
GO
ALTER DATABASE [demo] SET NUMERIC_ROUNDABORT OFF 
GO
ALTER DATABASE [demo] SET QUOTED_IDENTIFIER OFF 
GO
ALTER DATABASE [demo] SET RECURSIVE_TRIGGERS OFF 
GO
ALTER DATABASE [demo] SET  DISABLE_BROKER 
GO
ALTER DATABASE [demo] SET AUTO_UPDATE_STATISTICS_ASYNC OFF 
GO
ALTER DATABASE [demo] SET DATE_CORRELATION_OPTIMIZATION OFF 
GO
ALTER DATABASE [demo] SET TRUSTWORTHY OFF 
GO
ALTER DATABASE [demo] SET ALLOW_SNAPSHOT_ISOLATION OFF 
GO
ALTER DATABASE [demo] SET PARAMETERIZATION SIMPLE 
GO
ALTER DATABASE [demo] SET READ_COMMITTED_SNAPSHOT OFF 
GO
ALTER DATABASE [demo] SET HONOR_BROKER_PRIORITY OFF 
GO
ALTER DATABASE [demo] SET RECOVERY FULL 
GO
ALTER DATABASE [demo] SET  MULTI_USER 
GO
ALTER DATABASE [demo] SET PAGE_VERIFY CHECKSUM  
GO
ALTER DATABASE [demo] SET DB_CHAINING OFF 
GO
ALTER DATABASE [demo] SET FILESTREAM( NON_TRANSACTED_ACCESS = OFF ) 
GO
ALTER DATABASE [demo] SET TARGET_RECOVERY_TIME = 60 SECONDS 
GO
ALTER DATABASE [demo] SET DELAYED_DURABILITY = DISABLED 
GO
EXEC sys.sp_db_vardecimal_storage_format N'demo', N'ON'
GO
ALTER DATABASE [demo] SET QUERY_STORE = OFF
GO
USE [demo]
GO
ALTER DATABASE SCOPED CONFIGURATION SET LEGACY_CARDINALITY_ESTIMATION = OFF;
GO
ALTER DATABASE SCOPED CONFIGURATION SET MAXDOP = 0;
GO
ALTER DATABASE SCOPED CONFIGURATION SET PARAMETER_SNIFFING = ON;
GO
ALTER DATABASE SCOPED CONFIGURATION SET QUERY_OPTIMIZER_HOTFIXES = OFF;
GO
USE [demo]
GO
/****** Object:  Table [dbo].[Lop]    Script Date: 9/29/2022 10:14:34 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Lop](
	[id_lop] [nchar](10) NOT NULL,
	[id_sv] [nchar](10) NULL,
	[ten_lop] [nchar](10) NULL,
 CONSTRAINT [PK_Lop] PRIMARY KEY CLUSTERED 
(
	[id_lop] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[SinhVien]    Script Date: 9/29/2022 10:14:34 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[SinhVien](
	[id_sv] [nchar](10) NOT NULL,
	[hoten_sv] [nvarchar](50) NULL,
	[diachi_sv] [nvarchar](50) NULL,
	[gioitinh_sv] [bit] NULL,
	[sdt_sv] [nvarchar](50) NULL,
 CONSTRAINT [PK_SinhVien] PRIMARY KEY CLUSTERED 
(
	[id_sv] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Taikhoan]    Script Date: 9/29/2022 10:14:34 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Taikhoan](
	[username] [nchar](10) NOT NULL,
	[password] [nchar](10) NULL,
 CONSTRAINT [PK_Taikhoan] PRIMARY KEY CLUSTERED 
(
	[username] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
ALTER TABLE [dbo].[Lop]  WITH CHECK ADD  CONSTRAINT [FK_Lop_Lop1] FOREIGN KEY([id_lop])
REFERENCES [dbo].[Lop] ([id_lop])
GO
ALTER TABLE [dbo].[Lop] CHECK CONSTRAINT [FK_Lop_Lop1]
GO
USE [master]
GO
ALTER DATABASE [demo] SET  READ_WRITE 
GO
