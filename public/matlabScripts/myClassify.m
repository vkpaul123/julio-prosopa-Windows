function output_arr = myClassify( input_args )
%MYCLASSIFY Summary of this function goes here
%   Detailed explanation goes here
    
    readTxtFile = sprintf('C:\\LaravelProject\\julio-prosopa\\storage\\app\\public\\matlabLogFiles\\%s.txt', input_args);
    testSample = csvread(readTxtFile);
    testSample = testSample(:, 2:35);
    dataset = [xlsread('C:\Users\vkpau\Desktop\_railwayStn\hi\WorkerBro\_OutputImages\Leaves\Leaves_myDataset.xlsx'); xlsread('C:\Users\vkpau\Desktop\_railwayStn\hi\WorkerBro\_OutputImages\Leaves\Leaves_myDataset_NotKeru.xlsx')];
    dataset = dataset(randperm(size(dataset,1)), :);
    
    X = dataset(:,1:34);
    Y = dataset(:,35);
    
    NbMdl = fitcnb(X,Y);
    KnnMdl = fitcknn(X,Y);
    SvmMdl = fitcsvm(X,Y);
    TreeMdl = fitctree(X,Y);
    DiscrMdl = fitcdiscr(X,Y);

    NbMdl_kf = fitcnb(X,Y, 'CrossVal','on');
    KnnMdl_kf = fitcknn(X,Y, 'CrossVal','on');
    SvmMdl_kf = fitcsvm(X,Y, 'CrossVal','on');
    TreeMdl_kf = fitctree(X,Y, 'CrossVal','on');
    DiscrMdl_kf = fitcdiscr(X,Y, 'CrossVal','on');
    
    ConfMat_NbMdl = confusionmat(Y, resubPredict(NbMdl));
    ConfMat_KnnMdl = confusionmat(Y, resubPredict(KnnMdl));
    ConfMat_SvmMdl = confusionmat(Y, resubPredict(SvmMdl));
    ConfMat_TreeMdl = confusionmat(Y, resubPredict(TreeMdl));
    ConfMat_DiscrMdl = confusionmat(Y, resubPredict(DiscrMdl));
    
    ConfMat_NbMdl_kf = confusionmat(Y, kfoldPredict(NbMdl_kf));
    ConfMat_KnnMdl_kf = confusionmat(Y, kfoldPredict(KnnMdl_kf));
    ConfMat_SvmMdl_kf = confusionmat(Y, kfoldPredict(SvmMdl_kf));
    ConfMat_TreeMdl_kf = confusionmat(Y, kfoldPredict(TreeMdl_kf));
    ConfMat_DiscrMdl_kf = confusionmat(Y, kfoldPredict(DiscrMdl_kf));
     
    
    output_arr = [predict(NbMdl, testSample) predict(KnnMdl, testSample) predict(SvmMdl, testSample) predict(TreeMdl, testSample) predict(DiscrMdl, testSample)];
    output_arr = [output_arr (sum(resubPredict(NbMdl)==Y)/length(resubPredict(NbMdl))) (sum(resubPredict(KnnMdl)==Y)/length(resubPredict(KnnMdl))) (sum(resubPredict(SvmMdl)==Y)/length(resubPredict(SvmMdl))) (sum(resubPredict(TreeMdl)==Y)/length(resubPredict(TreeMdl))) (sum(resubPredict(DiscrMdl)==Y)/length(resubPredict(DiscrMdl)))];
    output_arr = [output_arr (sum(kfoldPredict(NbMdl_kf)==Y)/length(kfoldPredict(NbMdl_kf))) (sum(kfoldPredict(KnnMdl_kf)==Y)/length(kfoldPredict(KnnMdl_kf))) (sum(kfoldPredict(SvmMdl_kf)==Y)/length(kfoldPredict(SvmMdl_kf))) (sum(kfoldPredict(TreeMdl_kf)==Y)/length(kfoldPredict(TreeMdl_kf))) (sum(kfoldPredict(DiscrMdl_kf)==Y)/length(kfoldPredict(DiscrMdl_kf)))]

    outputFileName = sprintf('C:\\LaravelProject\\julio-prosopa\\storage\\app\\public\\matlabLogFiles\\%s_classify.txt', input_args);
    csvwrite(outputFileName, output_arr);
end

