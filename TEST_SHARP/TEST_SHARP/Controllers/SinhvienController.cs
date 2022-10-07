using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;
using System.ComponentModel;
using TEST_SHARP.Models;
using System.ComponentModel;
using PagedList;
using PagedList.Mvc;

namespace TEST_SHARP.Controllers
{
    public class SinhvienController : Controller
    {
        // GET: Sinhvien
        QLSVEntities db = new QLSVEntities();//để ý chữ Enniities để truyền DB vào
        public ActionResult Index(string strsearch,int? page)
          {
            int pageNumber = (page ?? 1);
            int pageSize = 6;
            List<SinhVien> layds = new List<SinhVien>(); //phải có ngoặc để thừa hưởng từ hàm và vào list danh sách
            layds = db.SinhViens.ToList();
            if(strsearch!=null)
            {
                layds = db.SinhViens.Where(m=>m.hoten_sv.Contains(strsearch)).ToList();
                return View(layds.ToPagedList(pageNumber, pageSize));
            }
            return View(layds.ToPagedList(pageNumber,pageSize));
           
         }
        public ActionResult Create()
        {
            return View();
        }
        [HttpPost]
        public ActionResult Create(SinhVien sv)
        {
            if (ModelState.IsValid) // kiểm tra tính hợp lệ
            {
                db.SinhViens.Add(sv);
                try
                {
                    db.SaveChanges();
                }
                catch(InvalidCastException e)
                {
                    Console.WriteLine(e);
                }
               
                return RedirectToAction("Index");
            }
            else
            {
                return View();
            }
        }

        public ActionResult Edit(string id)
        {
            SinhVien sv = new SinhVien();
            sv = db.SinhViens.FirstOrDefault(m => m.id_sv == id);
                
            return View(sv);

        }
        [HttpPost]
        public ActionResult Edit(string id, SinhVien sv)
        {
            SinhVien layds = new SinhVien();
            layds = db.SinhViens.FirstOrDefault(m => m.id_sv == id);
            if (layds != null)
            {
                layds.id_sv = sv.id_sv;
                layds.hoten_sv = sv.hoten_sv;
                layds.diachi_sv = sv.diachi_sv;
                layds.gioitinh_sv = sv.gioitinh_sv;
                layds.sdt_sv = sv.sdt_sv;
                db.SaveChanges();
                return RedirectToAction("Index");

            }
            else
            {
                return View();
            }
        }
        public ActionResult Delete(string id)
        {
            SinhVien sv = new SinhVien();
            sv = db.SinhViens.FirstOrDefault(m => m.id_sv == id);
            db.SinhViens.Remove(sv);
            db.SaveChanges();
            return RedirectToAction("Index");
        }
    }
}